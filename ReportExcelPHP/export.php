<?php
//Exportar resultados la votacion a Excel
header('Content-type: application/vnd.ms-excel charset=UTF-8');
header("Content-Disposition: attachment; filename=encuesta_servicio.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo "\xEF\xBB\xBF"; //UTF-8 BOM echo $out;
?>
 
<h1>Resultados Encuesta Servicio al Cliente</h1>
 
<table class="table table-hover table-striped text-center"border="1" cellspacing=1 cellpadding=2 style="font-size: 11pt">
    <thead>
        <tr>
            <td>Cedula Contratante</td>
            <td>¿Como te sentiste con nosotros?</td>
            <td>¿Que te gustaría recibir de nosotros?</td>
            <td>¿Que tan probable es que nos recomiendes con un familiar o amigo? (Escala de 0 a 5)</td>
        </tr>
    </thead>
<div class="tabla">

<?php
    include "../includes/conect.php";
    $sql = "SELECT * FROM calificacion";
    $query = $con->query($sql);  

    while($row=$query->fetch_array()) {
    printf("<tr>
    <td>&nbsp;%s</td>
    <td>&nbsp;%s</td>
    <td>&nbsp;%s</td>
    <td>&nbsp;%s</td>
    </tr>", utf8_encode($row["id_cliente"]),utf8_encode($row["opinionOne"]),utf8_encode($row["opinionTwo"]),utf8_encode($row["raiting"]));
    }
?>
