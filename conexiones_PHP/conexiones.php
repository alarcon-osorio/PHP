<!--Conexion a SQL -->
<?php
$NombreBD = "DB";
$Servidor = "IP";
$Usuario = "USUARIO";
$Password ="PASSWD";

$IdConexion = mssql_connect($Servidor, $Usuario, $Password);
mssql_select_db($NombreBD, $IdConexion);
?> 

<!--Conexion Remota MySQL y local-->
<?php
$usuario = "USUARIO";
$password = "PASSWD";
$servidor = "IP-HOSTING";
$basededatos = "DB";

$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! No se ha podido conectar a la base de datos" );
?> 

<!--Conexion a MySQL local PHP <= 5.3-->
<?php
$NombreBD = "DB";
$Servidor = "SERVER";
$Usuario = "USER";
$Password ="PASSWD";

$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
?>

<!--Conexion PDO MySQL-->

<?php  
//Conexion a la Base de Datos
$bd = new PDO('mysql:host=localhost;dbname=diamadre', 'root', 'intranet200*');
$bd->exec('SET NAMES utf8');
?>
