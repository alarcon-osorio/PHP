<?php
ob_start(); //este codigo es por un error de head submit linea 38-45-46 problema HOSTING
?>

<?php
  session_start(); 
  // Obtengo los datos cargados en el formulario por method="GET"  
  $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null ;
  $password = isset($_POST['password']) ? $_POST['password'] : null ;
?>

<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>Iniciar Sesion - Asamblea 2018</title>
    <meta name="viewport" content="initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="icon" href="images/favicon/favicon.ico" type="image/x-icon">
	<link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
	   
  </head>
<body>
	<!--
	you can substitue the span of reauth email for a input with the email and
	include the remember me checkbox
	-->
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="images/sesion/logoolivos.png" />
            <p id="profile-name" class="profile-name-card"></p>
             <form class="form-signin" action="index.php" method="POST">
			
                <span id="reauth-email" class="reauth-email"></span>
			<input type="text" class="form-control" name="usuario" id="inputEmail3" placeholder="Usuario" required>
			<input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Contrase&ntilde;a" required> 
                    <?php
                    // Esto se puede remplazar por un usuario real guardado en la base de datos.
                    if($usuario == 'coopserfun' && $password == 'asamblea2018'){
                    // Guardo en la sesion el email del usuario.
                    $_SESSION['usuario'] = $usuario;
                    // Redirecciono al usuario a la pagina inicio del sitio.
                    header("HTTP/1.1 302 Moved Temporarily");
                    header("Location: inicio.php");
                    }else{
                    echo "<script type='text/javascript'>alert('Usuario o Contrase&ntilde;a incorrecto vuelve a intentarlo');</script>";
                    }
                    ?>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordarme
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar SesiÃ³n</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->
  </body>
</html>

<?php
ob_end_flush(); //este codigo es por un error de head submit linea 38-45-46
?>
