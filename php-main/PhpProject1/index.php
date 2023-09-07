<?php
include '.\FormPersonal.php';

    $nombres = 'Andres felipe';
    $apellidos = 'Garzon Castillo';
    $fecha_nacimiento ='18-01-2005';
    $documento ='1019041167';
    $tipo_documento ='Cedulá';
    $direccion='Calle 71 71 13';
    $ciudad='Bogotá';
    $email='agarzonc1@gmail.com';
    
    $userBasics = new FormPersonal($nombres, $apellidos, $fecha_nacimiento, $documento, $tipo_documento, $direccion, $ciudad, $email);
    
    echo $userBasics ->getDataUser();
    
    