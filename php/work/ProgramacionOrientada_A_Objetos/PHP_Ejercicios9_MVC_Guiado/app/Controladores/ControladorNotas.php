<?php
// Unimos Notas.php y RepositorioNotas.php al index.php
require_once __DIR__ . '/../Modelos/Nota.php';
require_once __DIR__ . '/../Modelos/RepositorioNotas.php';

class ControladorNotas{
    private $repositorio;

    // Añadimos un constructor
    public function __construct() {
    $this->repositorio = new RepositorioNotas();
    }

    public function listar(){
        // Pide las notas al modelo y carga la vista 
        try {
            $notas = $this->repositorio->obtenerTodas();
            $this->renderizar(['vista' => 'notas/listar', 'notas' => $notas]);
        } catch (Exception $e) {
            $this->registrarError('LISTAR', $e);
            $this->renderizar(['vista' => 'notas/listar', 'notas' => [], 'error' => 'No se pudieron cargar las notas']);        }
}



    public function crear(){
        // Muestra el formulario
        $this->renderizar(['vista' => 'notas/crear', 'antiguos' => ['texto' => '']]);
    }

        public function guardar() {
        try {
            // 1. Leer el texto del formulario
            $texto = trim($_POST['texto'] ?? '');

            // 2. Validar
            if (strlen($texto) < 3) {
                throw new Exception("La nota debe tener al menos 3 caracteres");
            }

            if (strlen($texto) > 80) {
                throw new Exception("La nota no puede superar 80 caracteres");
            }

            // 3. Crear objeto Nota con id y fecha
            $nota = new Nota();
            $nota->id = time(); // id simple con timestamp
            $nota->texto = $texto;
            $nota->fecha = date('Y-m-d H:i:s');

            // 4. Guardar en el repositorio
            $this->repositorio->agregar($nota);

            // 5. Redirigir al listado
            header("Location: index.php?accion=listar");
            exit;

        } catch (Exception $e) {
            // 6. Registrar el error
            $this->registrarError('GUARDAR', $e);

            // 7. Volver al formulario con error y antiguos
            $this->renderizar([
                'vista' => 'notas/crear',
                'antiguos' => ['texto' => $_POST['texto'] ?? ''],
                'error' => $e->getMessage()
            ]);
        }
    }

    public function renderizar($datos){
        // Cargar un layout y dentro, la vista.
        // 1. Convertir $datos en variables:
        extract($datos);
        // 2. Calcular ruta de la vista:s
        $archivoVista = __DIR__ . '/../Vistas/' . $vista . '.php';
        // 3. Pasar al layout la ruta de la vista:
        $vistaContenido = $archivoVista;
        require __DIR__ . '/../Vistas/layout.php';
    }

    public function registrarError($contexto, $e){
        // Registra un error
        $archivoLog = __DIR__ . '/../../storage/errores.log';
        $fecha = date('Y-m-d H:i:s');
  
        $linea = $fecha . " | " . $contexto . " | " . $e->getMessage() . "\n";
        file_put_contents($archivoLog, $linea, FILE_APPEND);

    }
}
?> 