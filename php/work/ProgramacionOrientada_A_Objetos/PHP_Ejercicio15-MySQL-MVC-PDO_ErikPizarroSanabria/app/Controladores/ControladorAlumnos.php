<?php
// app/Controlador/ControladorAlumnos.php

// Añadimos las conexiones necesarias
require_once __DIR__ . '/../Modelos/RepositorioAlumnos.php';

// Creamos la clase
class ControladorAlumnos{

    // Lo hacemos objeto del repositorio
    private $repositorio;
    function __construct()
    {
        $this->repositorio = new RepositorioAlumnos();
    }

    // Creamos la función renderizar
    function renderizar ($vista, $datos = []){
        extract($datos);
        // Comprobamos 
        $archivoVista = __DIR__ . '/../Vistas/' . $vista . '.php';
        if (!file_exists($archivoVista)) {
            echo "Vista no encontrada : " . $vista;
            return;
        }

        $vistaContenido = $archivoVista;

        require __DIR__ . '/../Vistas/layout.php';
    }

    // Crear la función RegistrarError
    function registrarErrores($metodo, $mensaje){
        $mensj = date("Y-m-d H:i:s") . " | " . $metodo . " | " . $mensaje . PHP_EOL;
        file_put_contents(__DIR__ . '/../../storage/errores.log', $mensj, FILE_APPEND);
    }

    // Creamos la función listar
    function listar(){
        try{
            $alumnos = $this->repositorio->obtenerTodos(); // Utilizamos la fuinción de obtenrTodos de RepositorioAlumnos
            $this->renderizar('alumnos/listar', ['alumnos' => $alumnos]);

        } catch(Exception $e) {   // Registramos el error  y marcamos un mensaje amigable
            $this->registrarErrores("LISTAR", $e->getMessage());
            $this->renderizar('alumnos/listar' , [
                'alumnos' => [],
                'error' => 'Error, no se pudieron cargar los alumnos, pruebe más tarde'
            ]);
        }
    }

    // Creamos la función borrar
    function borrar(){
    $id = $_GET['id'] ?? '';

    try {
        // Comprobamos si el id es valido
        if ($id === '' || !ctype_digit($id)){
            throw new Exception("Id invalido para borrar");
        }
        
        $this->repositorio->borrar($id);
    } catch (Exception $e){
        $this->registrarErrores("BORRAR", $e);
    }

    header("Location: index.php?accion=borrado");
    exit;
}

// Creamos la función borrado
function borrado(){
    $this->renderizar('alumnos/eliminado');
}
}
?>