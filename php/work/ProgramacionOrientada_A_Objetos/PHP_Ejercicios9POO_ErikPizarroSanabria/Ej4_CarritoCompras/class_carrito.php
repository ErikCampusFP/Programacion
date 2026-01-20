<?php
// Generamos la clase carrito 
class Carrito {
    // Generamos la propiedad
    public $productos = [];  

    // Agregamos los metodos
    // Función Agregar Producto
    public function agregarProducto($nombre, $precio, $cantidad){
        // Sumamos la cantidad si el producto ya se encuentra en la cesta
        foreach ($this->productos as $producto){
            if($producto['nombre'] == $nombre){
                $producto['cantidad'] += $cantidad;
                echo "Producto añadido correctamente"; 
                return $this->productos;
            }
        }
        // Si no existe lo añadimos
        $this->productos[] = [
            "nombre" => $nombre,
            "precio" => $precio,
            "cantidad" => $cantidad
        ];
        return $this->productos;
    }

    // Función Quitar Productos
    public function eliminarProducto($nombre){
        foreach ($this->productos as $indice => $producto){ // Aquí sirve para indicar el valor del indice y del producto, lo que genera que se pueda eliminar el producto
            if($producto['nombre'] == $nombre){
                unset($this->productos[$indice]); // unset sirve para eliminar elementos del array
            }
        }
    }

    // Función Calcular Total
    public function calcularTotal(){
        $precioTotal = 0;
        foreach ($this->productos as $producto){
            $subtotal = $producto['precio'] * $producto['cantidad'];
            $precioTotal = $precioTotal + $subtotal;
    }
        echo "El precio total del carrito es de: $precioTotal €";
    }

    // Función Detalle Carrito
    public function mostrarDetalleCarrito(){
        foreach ($this->productos as $producto){
            echo "Nombre: ". $producto['nombre']. "<br>";
            echo "Precio: ". $producto['precio']. " €".  "<br>";
            echo "Cantidad: ". $producto['cantidad']. "<br>";
            echo "Subtotal: ". ($producto['precio'] * $producto['cantidad']). "     €" . "<br><br>";
        }
    }
}
?>