<?php
// app/Controladores/ControladorAlumnos.php

// Añandimos las conexiones necesarias
require_once __DIR__ . '/../Modelos/RepositorioAlumnos.php';

// Creamos la clase
class ControladorAlumnos{

    // Lo hacemos objetivo del repositorio
    private $repositorio;
    function __construct()
    {
        $this->repositorio = new RepositorioAlumnos();
    }

    // Hacemos la función renderizar
    function renderizar($vista, $datos = []){
        $vistaRuta = __DIR__ . "/../Vistas/$vista.php";

        // Compruebo si existe
        if(!file_exists($vistaRuta)){
            throw new Exception("La vista $vista no existe");
        }

        // Definimos la variable que layout.php espera
        $vistaContenido = $vistaRuta;

        // Extraemos los datos para que estén disponibles como variables
        extract($datos);

        // Requerimos el layout, que a su vez incluirá $vistaContenido
        require __DIR__ . '/../Vistas/layout.php';
    }



    // Hacemos la función registrarErrores
    function registrarErrores($metodo, $mensaje){
        $mensj = date("Y-m-d H:i:s") . " | " . $metodo . " | " . $mensaje;
        file_put_contents(__DIR__ . '/../../storage/errores.log', $mensj, FILE_APPEND);
    }

    // Creamos la función listar
    function listar(){
        try{
            $alumnos = $this->repositorio->listar(); // Utilizamos la fuinción de obtenrTodos de RepositorioAlumnos
            $this->renderizar('alumnos/listar', ['alumnos' => $alumnos]);

        } catch(Exception $e) {   // Registramos el error  y marcamos un mensaje amigable
            $this->registrarErrores("LISTAR", $e->getMessage());
            $this->renderizar('alumnos/listar' , [
                'alumnos' => [],
                'error' => 'Error, no se pudieron cargar los alumnos, pruebe más tarde'
            ]);
        }
    }
    
    // Creamos la función actualizar
    public function actualizar() {
        try {
            // Verificamos que venga el ID
            if (empty($_POST['id'])) throw new Exception("ID del alumno no proporcionado");

            // Obtenemos el alumno actual
            $alumnoActual = $this->repositorio->obtenerPorId($_POST['id']);
            if (!$alumnoActual) throw new Exception("Alumno no encontrado");

            // Creamos el objeto alumno con los datos del formulario o los originales si están vacíos
            $alumno = new Alumno();
            $alumno->id = $_POST['id'];
            $alumno->nombre = trim($_POST['nombre'] ?? '') ?: $alumnoActual->nombre;
            $alumno->email  = trim($_POST['email'] ?? '')  ?: $alumnoActual->email;
            $alumno->edad   = trim($_POST['edad'] ?? '')   ?: $alumnoActual->edad;
            $alumno->fecha_creacion = $alumnoActual->fecha_creacion;

            // Guardamos cambios
            $this->repositorio->actualizar($alumno);

            header("Location: index.php?controlador=alumnos&accion=actualizado");
            exit();

        } catch (Exception $e) {
            $this->registrarErrores("ACTUALIZAR", $e->getMessage());
            $this->renderizar('alumnos/formularioAct', [
                'error' => $e->getMessage(),
                'alumno' => $alumnoActual ?? null
            ]);
        }
        }


    
    // Creamos la función formularioAct
    public function formularioAct(){
        // Obtenemos el ID del alumno desde la URL, si no viene ponemos null
        $id = $_GET['id'] ?? null;

        // Llamamos al repositorio para obtener los datos completos del alumno con ese ID
        $alumno = $this->repositorio->obtenerPorId($id);

        // Renderizamos la vista del formulario de edición, pasando los datos del alumno
        $this->renderizar("alumnos/formularioAct", ['alumno' => $alumno]);
    }

    // Creamos la función actualizado
    public function actualizado(){
        $this->renderizar('alumnos/actualizado');
    }

}
?>  