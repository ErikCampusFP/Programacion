<?php
// app/Controladores/ControladorAlunnos.php

// Añadimos las conexiones
require_once __DIR__ .'/../Modelos/RepositorioAlumnos.php';

// Generamos la clase
class ControladorAlumnos{
    private $repositoiro;
    
    function __construct()
    {
        $this->repositoiro = new RepositorioAlumnos();
    }

    // LISTAR
    function listar(){
        try {
            $alumnos = $this->repositoiro->obtenerTodos();
            $this->renderizar('alumnos/listar', ['alumnos' => $alumnos]);
        } catch (Exception $e){
            $this->registrarError("LISTAR", $e);
            $this->renderizar('alumnos/listar' , [
                'alumnos' => [],
                'error' => 'No se pudieron cargar los alumnos. Revisa errores.log'
            ]);
        }
    }


    // VALIDACIONES
    function validar($nombre, $email, $edad){
        if(strlen($nombre) < 3){
            throw new Exception("El nombre debe de tener al menos 3 caracteres");
        }

        // email opcional, pero si existe debe de ser valido
        if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("El email no es valido");
        }

        if ($edad === '' || !ctype_digit($edad)){
            throw new Exception("La edad debe ser un nunmero");
        }

        $edadNum = (int)$edad;
        if ($edadNum <1 || $edadNum > 120){
            throw new Exception("La edad debe de estar entre 1 y 120");
        }
    }

    // RENDERIZAR (layout + vista)
    function renderizar ($vista, $datos = []){
        extract($datos);

        $archivoVista = __DIR__ . '/../Vistas/' . $vista . '.php';
        if (!file_exists($archivoVista)) {
            echo "Vista no encontrada : " . $vista;
            return;
        }

        $vistaContenido = $archivoVista;

        require __DIR__ . '/../Vistas/layout.php';
    }

    // LOG de errores en fichero
    function registrarError($contexto, $e){
        $rutaLog = __DIR__ . '/../../storage/errores.log';
        $fecha = date('Y-m-d H:i:s');

        $linea = $fecha . " | " . $e->getFile() . " | " . $e->getLine() . "\n";
        file_put_contents($rutaLog, $linea, FILE_APPEND);
    }
}
?>