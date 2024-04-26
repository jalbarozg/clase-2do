<?php
    // Muestra todos los datos capturados de formulario
    // echo var_dump($_POST)
    $nom = $_GET['nombre'];
    $ape = $_GET['apellido'];
    $dir = $_GET['direccion'];
    $tel = $_GET['telefono'];
    $cor = $_GET['correo'];
    $con = md5( $_GET['contrasena'] );
    $len = $_GET['lenguaje'];
    echo "<h3>Informacion del Cliente</h3>";
    echo "Nombre: " . $nom."<br>";
    echo "Apellidos: " . $ape."<br>";
    echo "Direccion: " . $dir."<br>";
    echo "Telefono: " . $tel."<br>";
    echo "Correo: " . $cor."<br>";
    echo "Contrasena: " . $con."<br>";
    echo "Lenguaje: " . $len."<br>";
?>