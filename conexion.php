<?php

$servidor = 'mysql:host=localhost;dbname=yt_colores';
$usuario = 'root';
$password = '';



try{
    $conexion = new PDO($servidor, $usuario, $password);

    /*echo 'conectado';

    foreach($pdo->query('SELECT * from colores') as $fila) {
        print_r($fila);
    }*/

}

catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}