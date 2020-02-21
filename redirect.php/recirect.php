//Para redireccionar paginas en caso de error 500 o error 400
<?php
$page_online = @fopen('http://172.19.1.203/intranet','r');
if($page_online !== false){
    header("Location: http://172.19.1.203/intranet");
}else{
    header("Location: http://172.19.1.203/enlaces");
}
die();
?>
