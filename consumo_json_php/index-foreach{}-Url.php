<?php
$url = 'http://45.163.28.24:8000/OLIVOS_OBITUARIOS/modelo/controller_obituarios.xsjs?obituarios=general&bd=OLV_BOGOTA'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$datatypes = json_decode($data, true); // decode the JSON feed

foreach ($datatypes as $datos) {
    $no_interno =  $datos['No_Interno'];
    $fallecido =  $datos['nombre_fallecido'];
 }
