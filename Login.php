
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login, Ingresar</title> 
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
                <link rel="stylesheet" href="all.css" >
                <link rel="stylesheet" href="StyleMiCuenta.css" type="text/css"
</head> 
 
<body>

<header>
 <class="header">
     <div class="container">
     <div class="btn-menu">
          <label for="btn-menu">☰</label>
    </div>
<img src="Logo.jpeg" alt="LOGO"align="left" width="130" height="95">

     <nav class="menu">
    <a href="index.html">Inicio</a>
    <a href="QS.html">Quienes somos</a>
    <a href="Horarios.html">Horario</a>
    <a href="Contacto.html">Contactanos</a>
     </nav>
</div>
<body background="Pan de Temporada Fondo.jpg">
     <h1 style="text-align:center;"> Manhattan</h1>
     <h2 style="text-align:center;">Panaderia y pasteleria </h2>
</header>

<div class="capa"></div>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
     <div class="cont-menu">
        <nav>
            <a href="Login.php">Mi cuenta</a>
            <a href="index.html">Inicio</a>
            <a href="https://www.google.com/maps/dir/19.3755386,-99.1124146/itiz/@19.3762334,-99.1141153,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x85d1fd0614558e4b:0x3760847a107a0b9f!2m2!1d-99.0529122!2d19.3803148">Sucursal</a>
            <a href="https://www.facebook.com/pages/category/Bakery/Manhattan-Panader%C3%ADa-159615300719787/">Facebook</a>
            <a href="https://www.instagram.com/manhattanpanaderia/?hl=es">Instagram</a>
            <a href="https://www.youtube.com/channel/UC8El-KamqNxKQg-r15BmIxw">Youtube</a>
        </nav>
<label for="btn-menu">✖️</label>
       </div>
</div>



<div id="general">
    <div id="head">
    </div>
<h1 class="title">¡TENEMOS ALGO PARA CONCENTIRTE! </h1>
    






<form class="formulario" method="post">
    
    <h1>Login</h1>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="correo" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="pass" placeholder="Contraseña">
         
         </div>
         <input type="submit" name="Login" value="Login" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="registr0.php">Registrate </a></p>
         <?php
            include('login2.php');
         ?>
     </div>
    </form>
</body>
</html>
