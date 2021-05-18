<?php

/*echo 'editar.php?id=1&color=success&descripcion=este es un color verde';
echo '<br>';*/

$id = $_GET['id'];
$color = $_GET['color'];
$descripcion = $_GET['descripcion'];

/*echo $id;
echo '<br>';
echo $color;
echo '<br>';
echo $descripcion;*/

include_once 'conexion.php';

$sql_editar = 'UPDATE colores SET color=?,descripcion=? WHERE id=?';
$sentencia_editar = $conexion->prepare($sql_editar);
$sentencia_editar->execute(array($color,$descripcion,$id));


header('location:index.php');