<?php
// Sacamos fecha del formulario
$fecha = $_POST['fecha'];

// Convertimos a unix la fecha para poder hacer el date
$fechaUnix = strtotime($fecha);

// Sacamos que dia de la sema es = 0-> Domingo | 6 -> Sabado
$diaFecha = date('w',$fechaUnix);

// Generamos los días de la semana 
$diasSemana = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];

// Mostramos en que día naciste
echo "Naciste un $diasSemana[$diaFecha]";
?>