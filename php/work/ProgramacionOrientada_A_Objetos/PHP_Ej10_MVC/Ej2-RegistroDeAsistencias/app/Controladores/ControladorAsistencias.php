<?php
// Unimos Asistencia.php y RepositorioAsistencias.php
require_once __DIR__ . '/../Modelos/Asistencias.php';
require_once __DIR__ . '/../Modelos/RepositorioAsistencias.php';

// Generamos la clase
class ControladorAsistencias{
    private $controlador;

    // Generamos el constructo
    public function __construct()
    {
        $this->controlador = new RepositorioAsistencias();
    }
    // Generamos las funciones

    // Funcion listar
    public function listar(){
        // Pide las asistencias al modelo y carga la vista
        try{
            $asistencias = $this->controlador->obtenerTodas();
            $this->renderizar(['vista' => 'asistencias/listar', 'asistencias' => $asistencias]); // Extrae los datos en variables, define la vista a mostrar y carga el layout principal

            } catch (Exception $e) {
            $this->registrarError('LISTAR', $e); // Lista el error
            $this->renderizar(['vista' => 'asistencias/listar', 'asistencias' => [], 'error' => 'No se pudieron cargar las asistencias']); // Da una explicación educada al usuario mientras mantiene la web funcionando.
        }                                           
    }

    // Función Crear
    public function crear(){
        // Muestra el formulario
        $this->renderizar(['vista' => 'asistencias/crear', 'antiguos' => ['texto' => '']]); // La parte de 'antiguo', indica que el recuadro del texto aparezca al iniciar la pagina vacio
    }

    // Función Guardar
    public function guardar(){
        try{
            // 1. Sacamos el nombre y si asiste del formulario
            $nombre = trim($_POST['texto'] ?? ''); // Con el trim quitamos todos los espacios en blanco que se hayan generado sin querer
            $asiste = $_POST['asistencia'];
            // ?? '' -> Esto indica que si el formulario esta vacio, muestre un texto vacio en la variable, en vez de un error

            // 2. Validamos el texto para comprobar que cumple con lo pedido
            if(strlen($nombre) < 3){
                throw new Exception ("El nombre del alumno debe de tener al menos 3 caracteres");
            }
            if(strlen($nombre) > 40){
                throw new Exception("El nombre del alumno debe de tener como maximo 40 caracteres");
            }

            if($asiste != "SI" && $asiste != "NO"){ // Genera un error si no es SI o NO
                throw new Exception("La asistencia solo puede ser SI o NO");
            }

            // 3. Creamos el objeto tarea con id, fecha y estado
            $nota = new Asistencias();
            $nota->id = time();
            $nota->nombre = $nombre;
            $nota->fecha = date('Y-m-d H:i:s');
            $nota->asiste = $asiste;

            // 4. Guardamos la nota en el repositorio
            $this->controlador->agregar($nota); // Utiliza la función de reposditorioTareas

            // 5. Redirigir al listado
            header("Location: index.php?accion=listar"); // Esto lo que hace es que cuando se guarda la tarea, envia al usuario a la pagina principal
            exit;

        } catch (Exception $e){
            // 6. Registramos el error
            $this->registrarError('GUARDAR', $e); // Guarda el error

            // 7. Volver al formulario con error
            $this->renderizar([
                'vista' => 'asistencias/crear',
                'antiguos' => ['texto' => $_POST['texto'] ?? '', 'asistencia' => $_POST['asistencia'] ?? 'SI'],
                'error' => $e->getMessage() // Saca el mensaje de error de la excepción $e
            ]);
        }
        
    }

    public function renderizar($datos) { // Nota: Estos comentarios los ha realizado una IA
            // Prepara el escenario visual: combina el diseño general (layout) con el contenido específico.

            // 1. Desempaqueta los datos: Convierte las etiquetas del paquete (como 'error' o 'notas') 
            // en variables reales ($error, $notas) para que la página pueda usarlas directamente.
            extract($datos);

            // 2. Localiza el archivo: Construye la dirección física en el servidor donde está 
            // guardado el "dibujo" de la página (por ejemplo: 'Vistas/notas/listar.php').
            $archivoVista = __DIR__ . '/../Vistas/' . $vista . '.php';

            // 3. Prepara el "relleno" del diseño: Guarda la ruta del contenido específico 
            // para que el diseño general (layout) sepa qué parte debe mostrar en el centro.
            $vistaContenido = $archivoVista;

            // 4. Carga el marco principal: Llama al archivo de diseño global (cabecera, menú, pie) 
            // que finalmente mostrará todo el conjunto al usuario.
            require __DIR__ . '/../Vistas/layout.php';
    }

    public function registrarError($contexto, $e){
        // Registramos donde se guarda el error
        $archivoLog = __DIR__ . '/../../storage/errores.log';
        $fecha = date('Y-m-d H:i:s');

        $linea = $fecha . "|" . $contexto . "|" . $e->getMessage() . "\n";
        // Escribimos en el archivo.
        file_put_contents($archivoLog, $linea, FILE_APPEND);
    }

}
?>