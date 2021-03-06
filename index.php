<?php
$hostDb="localhost";
$nombreDb="temperaura_y_humedad";
$usuario="root";
$clave="";
$conexion=mysqli_connect($hostDb, $usuario, $clave ,$nombreDb);
if (!$conexion){//Solo si no se conect? a la Bd
  echo "Error al conectar a la Base de datos";
  exit();
}

//$conexion=mysqli_connect('localhost','root','','temperaura_y_humedad');


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RecyClick</title>
	<script src="https://kit.fontawesome.com/8b93d6230e.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>

<body >
	<nav class="nav">
		<a href="#inicio" class="marca">RecyClick</a>
		<ul id=menu class=menu>
			<li data-menuanchor="inicio" class='active'>
				<a href="#inicio">Inicio</a>
			</li>
			<li data-menuanchor="ingresa" >
					<a href="#ingresa">Ingresa</a>
			</li>
			<li data-menuanchor="unete">
						<a href="#unete">Unete</a>
			</li>
			<li data-menuanchor="contacto">
					<a href="#contacto">Contacto</a>
			</li>

		</ul>
	</nav>
	<main id="fullpage">
		<header class="section header">
			<div class="contenedor-titulo">
				<h1 class="titulo">
					<span class='texto-verde'>RecyClick</span>
				</h1>
				<p class="p">
					<span class='texto-negro'>
						recíclalo en un click
					</span>

				</p>

			</div>
			<div class="contenedor-icono">
				<p><a href="#ingresa" class="texto-naranja"> <i class="fas fa-chevron-down"></i></a></p>
			</div>
		</header>
		<!-- <section class="section Productos">
			<div class="contenedor-titulo">
				<h1 class="titulo"><span class="texto-verde">
						Productos
					</span></h1>
			</div>

			<video loop muted data-autoplay class="bg-video">
				<source src="media/Reusa.mp4" type="video/mp4">
			</video>
		</section> -->
		<section class="section login">	
		<div id="login">   
          
          
          <form action="php/validacion.php" class="formulario" method="post">
          <h1 class="h1">Hola de Nuevo!</h1>
            <div class="field-wrap">
            <label>Correo:<span class="req"></span></label>
            <input type="email"required autocomplete="off" name="mail">
          </div>
          
          <div class="field-wrap">
            <label >
              Contraseña
            </label>
            <input type="password"required autocomplete="off" name="pass">
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block">Inicio de Sesión</button>
          
          </form>

        </div>
        
      </div>
		</section>
	<section class="section login">
			
        <div id="signup">   
          
          <form action="php/registro.php" method="post" class="form">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombres<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="name" />
            </div>
        
            <div class="field-wrap">
              <label>
               Apellidos<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="lastname">
            </div>
		  </div>
		  <div class="field-wrap">
            <label>
              Identificación<span class="req">*</span>
            </label>
            <input type="identificacion"required autocomplete="off" name="identificacion">
		  </div>
		  <div class="field-wrap">
            <label>
              Dirección<span class="req">*</span>
            </label>
            <input type="address"required autocomplete="off" name="address">
		  </div>
		  <div class="field-wrap">
            <label>
              telefono<span class="req">*</span>
            </label>
            <input type="telephone"required autocomplete="off" name="telephone">
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"name="email">
          </div>
          
          <div class="field-wrap">
            <label>
              Elige una contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password">
          </div>
          
          <button type="submit" class="button button-block">Registrate</button>
		</div>
          </form>

		</div>
	</section>
	<footer class="section footpage">
			<h2 class="texto-blanco">SIGUENOS EN REDES SOCIALES</h2>
			<p class="redes-sociales">
				<a href="" class="facebook"><i class="fab fa-facebook-square"></i></a>
				<a href="" class="instagram"><i class="fab fa-instagram"></i></a>
				<a href="" class="twitter"><i class="fab fa-twitter-square"></i></a>
			</p>
	</footer>
	</main>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.js"></script>
	<script src="js/app.js"></script>
</body>

</html>