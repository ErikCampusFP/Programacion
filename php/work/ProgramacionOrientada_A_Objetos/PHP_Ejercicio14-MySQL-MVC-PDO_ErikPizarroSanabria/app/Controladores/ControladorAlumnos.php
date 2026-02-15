<?php

// Lo conectamos al Repositorio
require_once __DIR__ . '/../Modelos/RepositorioAlumnos.php';

// Creamos la clase
class ControladorAlumnos{

// Creamos los metdos

    private function renderizar($vista){ // función renderizar
        include __DIR__ . "/../Vistas/$vista.php";
    }

    // Las funciónes crear y correcto, lo unico que hacen es cargar las vistas usando la función renderizar
    public function crear(){ // función crear
        $this->renderizar('alumnos/crear');
    }

    public function correcto(){
        $this->renderizar('alumnos/correcto');
    }

    private function validar($nombre, $email, $edad){
        if(strlen($nombre) < 3){
            throw new Exception("El nombre debe de tener al menos 3 caracteres");
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)){ // Comprueba qeu el email es valido con el filtro incorporado en PHP y tambien comprueba que no esta vacio
            throw new Exception("El email no es valido");
        }

        if(!filter_var($edad, FILTER_VALIDATE_INT)){
            throw new Exception("La edad debe de ser un numero entero");
        }
    }

    private function registrarError($mensaje, $contexto = 'GENERAL') {
        $log = date('Y-m-d H:i:s') . " | $contexto | $mensaje" . PHP_EOL;
        file_put_contents(__DIR__ . '/../../storage/errores.log', $log, FILE_APPEND);
    }


    public function guardar(){  
    try {
            // Comprobamos que el metodo es post
            if($_SERVER['REQUEST_METHOD'] !== 'POST'){
                throw new Exception("Metodo no valido");
            }

            // Recogemos los datos del formulario
            $nombre = $_POST['nombre'] ?? ''; // ?? '' -> Esto sirve para que solo utilice los datos de POST si existe y no es NULL
            $email = $_POST['email'] ?? '';
            $edad = $_POST['edad'] ?? '';

            // Validamos los datos
            $this->validar($nombre, $email, $edad);

            // Creamos el objeto Alumno
            $fechaCreacion = date('Y-m-d H:i:s');
            $alumno = new Alumno(null,$nombre, $email, $edad, $fechaCreacion);
            
            // Llamamos al repositorio para insertar
            $repositorio = new RepositorioAlumnos();
            $repositorio->insertar($alumno);

            // Redirigimos a correcto
            header('Location: ?accion=correcto'); // Redirige a correcto
            exit; // Sale del try
        } catch (Exception $e){
            // Registramos el error y lo guardamos el errores.log
            $this->registrarError($e->getMessage(), 'GUARDAR');
            $this->crear(); // Utiliza la función crear para cargar la vista crear
        }
    }
}
?>