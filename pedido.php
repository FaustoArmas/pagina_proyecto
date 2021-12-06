<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Realizar pedido</title> 
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
<!---<h1 class="title">¡QUEREMOS CONOCERTE! </h1>--->
    

 <form class="formulario" method="post">
    
    <h1>Realizar un pedido</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <select type="text" name="tipo_pastel" >
             <option type="text" name="tipo_pastel" class="opciones">Seleccione el Tipo de Pedido</option>
             <option type="text" name="tipo_pastel" class="opciones">(MP) Pasteles más pedidos</option>
             <option type="text" name="tipo_pastel" class="opciones">(PBa) Pasteles para Bautizos</option>
             <option type="text" name="tipo_pastel" class="opciones">(PBo) Pasteles para Bodas</option>
             <option type="text" name="tipo_pastel" class="opciones">Rosticeria Paquete 1</option>
             <option type="text" name="tipo_pastel" class="opciones">Rosticeria Paquete 2</option>
             <option type="text" name="tipo_pastel" class="opciones">Velas, Globos o Regalos</option>
             <option type="text" name="tipo_pastel" class="opciones">Pan de temporada</option>
         </select>
         </div>
        

        <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <select type="text" name="sel_pastel" >
             <option type="text" name="sel_pastel" class="opciones">Seleccione el producto</option>
             <option type="text" name="sel_pastel" class="opciones">(MP) - Mas pedidos  Pastel tres leches de chocolate con dulce de leche</option>
             <option type="text" name="sel_pastel" class="opciones">(MP) - Mas pedidos  Chocoflan, pastel imposible</option>
             <option type="text" name="sel_pastel" class="opciones">(MP) - Mas pedidos  El pastel de mil hojas</option>
             <option type="text" name="sel_pastel" class="opciones">(PBa) - Pastel para Bautizos Pastel de la santa cruz</option>
             <option type="text" name="sel_pastel" class="opciones">(PBa) - Pastel para Bautizos Pastel a la crepa</option>
             <option type="text" name="sel_pastel" class="opciones">(PBa) - Pastel para Bautizos Pastel gracias a Dios</option>
             <option type="text" name="sel_pastel" class="opciones">(PBo) - Pastel para Bodas Couple Cake</option>
             <option type="text" name="sel_pastel" class="opciones">(PBo) - Pastel para Bodas Couple Cake</option>
             <option type="text" name="sel_pastel" class="opciones">(PBo) - Pastel para Bodas El pastel de la pasion</option>
             <option type="text" name="sel_pastel" class="opciones">Pan de temporada - Pan de muerto</option>
              <option type="text" name="sel_pastel" class="opciones">Pan de temporada - Pan de muerto</option>
              <option type="text" name="sel_pastel" class="opciones">Pan de temporada - Capirotada</option>
              <option type="text" name="sel_pastel" class="opciones">Paquete 1: 2 pollos rostizados, papas, alitas y refresco</option>
              <option type="text" name="sel_pastel" class="opciones">Paquete 2: 2 pollos rostizados, papas, alitas, salchichas, refresco y juguete</option>
              <option type="text" name="sel_pastel" class="opciones">Velas de cumpleaños 
              simples</option>
              <option type="text" name="sel_pastel" class="opciones">Velas de cumpleaños en forma de letras</option>
              <option type="text" name="sel_pastel" class="opciones">Velas de cumpleaños en forma de numeros</option>
              <option type="text" name="sel_pastel" class="opciones">Globos simples con letras de Feliz Cumpleaños</option>
              <option type="text" name="sel_pastel" class="opciones">Globos de Feliz Cumpleaños con letras</option>
              <option type="text" name="sel_pastel" class="opciones">Globos de Feliz Cumpleaños simples</option>


         </select>
         </div>

         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <select type="text" name="dia" >
             <option type="text" name="dia" class="opciones">Dia de entrega</option>
             <option type="text" name="dia" class="opciones">1</option>
             <option type="text" name="dia" class="opciones">2</option>
             <option type="text" name="dia" class="opciones">3</option>
             <option type="text" name="dia" class="opciones">4</option>
             <option type="text" name="dia" class="opciones">5</option>
             <option type="text" name="dia" class="opciones">6</option>
             <option type="text" name="dia" class="opciones">7</option>
             <option type="text" name="dia" class="opciones">8</option>
             <option type="text" name="dia" class="opciones">9</option>
             <option type="text" name="dia" class="opciones">10</option>
             <option type="text" name="dia" class="opciones">11</option>
             <option type="text" name="dia" class="opciones">12</option>
             <option type="text" name="dia" class="opciones">13</option>
             <option type="text" name="dia" class="opciones">14</option>
             <option type="text" name="dia" class="opciones">15</option>
             <option type="text" name="dia" class="opciones">16</option>
             <option type="text" name="dia" class="opciones">17</option>
             <option type="text" name="dia" class="opciones">18</option>
             <option type="text" name="dia" class="opciones">19</option>
             <option type="text" name="dia" class="opciones">20</option>
             <option type="text" name="dia" class="opciones">21</option>
             <option type="text" name="dia" class="opciones">22</option>
             <option type="text" name="dia" class="opciones">23</option>
             <option type="text" name="dia" class="opciones">24</option>
             <option type="text" name="dia" class="opciones">25</option>
             <option type="text" name="dia" class="opciones">26</option>
             <option type="text" name="dia" class="opciones">27</option>
             <option type="text" name="dia" class="opciones">28</option>
             <option type="text" name="dia" class="opciones">29</option>
             <option type="text" name="dia" class="opciones">30</option>
             <option type="text" name="dia" class="opciones">31</option>
         </select>
         </div>

         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <select type="text" name="mes" >
             <option type="text" name="mes" class="opciones">Mes de entrega</option>
             <option type="text" name="mes" class="opciones">Enero</option>
             <option type="text" name="mes" class="opciones">Febrero</option>
             <option type="text" name="mes" class="opciones">Marzo</option>
             <option type="text" name="mes" class="opciones">Abril</option>
             <option type="text" name="mes" class="opciones">Mayo</option>
             <option type="text" name="mes" class="opciones">Junio</option>
             <option type="text" name="mes" class="opciones">Julio</option>
             <option type="text" name="mes" class="opciones">Agosto</option>
             <option type="text" name="mes" class="opciones">Septiembre</option>
             <option type="text" name="mes" class="opciones">Octubre</option>
             <option type="text" name="mes" class="opciones">Noviembre</option>
             <option type="text" name="mes" class="opciones">Diciembre</option>
         </select>
         </div>
         

         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <select type="text" name="ano" >
             <option type="text" name="ano" class="opciones">Año de entrega</option>
             <option type="text" name="ano" class="opciones">2021</option>
             <option type="text" name="ano" class="opciones">2022</option>
             <option type="text" name="ano" class="opciones">2023</option>
         </select>
         </div>

         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <select type="text" name="hora" >
             <option type="text" name="hora" class="opciones">Hora de entrega</option>
             <option type="text" name="hora" class="opciones">07:00</option>
             <option type="text" name="hora" class="opciones">08:00</option>
             <option type="text" name="hora" class="opciones">09:00</option>
             <option type="text" name="hora" class="opciones">10:00</option>
             <option type="text" name="hora" class="opciones">11:00</option>
             <option type="text" name="hora" class="opciones">12:00</option>
             <option type="text" name="hora" class="opciones">13:00</option>
             <option type="text" name="hora" class="opciones">14:00</option>
             <option type="text" name="hora" class="opciones">15:00</option>
             <option type="text" name="hora" class="opciones">16:00</option>
             <option type="text" name="hora" class="opciones">17:00</option>
             <option type="text" name="hora" class="opciones">18:00</option>
             <option type="text" name="hora" class="opciones">19:00</option>
             <option type="text" name="hora" class="opciones">20:00</option>
             <option type="text" name="hora" class="opciones">21:00</option>
             <option type="text" name="hora" class="opciones">22:00</option>
             <option type="text" name="hora" class="opciones">23:00</option>
         </select>
         </div>

          <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <select type="text" name="precio" >
             <option type="text" name="precio" class="opciones">Costo</option>
             <option type="text" name="precio" class="opciones">(MP) $ 350.00</option>
             <option type="text" name="precio" class="opciones">(PBa) $ 1 600.00</option>
             <option type="text" name="precio" class="opciones">(PBo) $ 4 000.000</option>
             <option type="text" name="sel_pastel" class="opciones">Pan de temporada - Pan de muerto $ 12.00 (pz)</option>
             <option type="text" name="sel_pastel" class="opciones">Pan de temporada - Pan de muerto $ 100.00 (10pz)</option>
              <option type="text" name="sel_pastel" class="opciones">Pan de temporada - Capirotada $ 120.00</option>
              <option type="text" name="sel_pastel" class="opciones">Pan de temporada - Rosca de Reyes chica $ 90.00</option>
              <option type="text" name="sel_pastel" class="opciones">Pan de temporada - Rosca de Reyes Mediana $ 170.00</option>
              <option type="text" name="sel_pastel" class="opciones">Pan de temporada - Rosca de Reyes Grande $ 350.00</option>
              <option type="text" name="sel_pastel" class="opciones">Paquete 1: 2 pollos rostizados, papas, alitas y refresco $ 210.00</option>
              <option type="text" name="sel_pastel" class="opciones">Paquete 2: 2 pollos rostizados, papas, alitas, salchichas, refresco y juguete $ 390.00</option>
              <option type="text" name="sel_pastel" class="opciones">Velas de cumpleaños 
              simples $ 3.00 (pz)</option>
              <option type="text" name="sel_pastel" class="opciones">Velas de cumpleaños 
              simples $ 50.00 (20pz)</option>
              <option type="text" name="sel_pastel" class="opciones">Velas de cumpleaños en forma de letras $ 80.00</option>
              <option type="text" name="sel_pastel" class="opciones">Velas de cumpleaños en forma de numeros $ 10.00 (pz)</option>
              <option type="text" name="sel_pastel" class="opciones">Globos simples con letras de Feliz Cumpleaños $ 70.00</option>
              <option type="text" name="sel_pastel" class="opciones">Globos de Feliz Cumpleaños con letras y adornos $ 200.00</option>
              <option type="text" name="sel_pastel" class="opciones">Globos de Feliz Cumpleaños simples $ 50.00</option>

         </select>
         </div>


           <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <select type="text" name="pago" >
             <option type="text" name="pago" class="opciones">Tipo de pago</option>
             <option type="text" name="pago" class="opciones">Efectivo</option>
             <option type="text" name="pago" class="opciones">Tarjeta de Debito</option>
             <option type="text" name="pago" class="opciones">Tarjeta de Crédito</option>
         </select>
         </div>


<label>Datos para la entrega</label>
<div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="text" name="persona" placeholder="Nombre de quién recibe el pedido">
         </div>

        <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <select type="text" name="estado" >
             <option type="text" name="estado" class="opciones">Estado</option>
             <option type="text" name="estado" class="opciones">Ciudad de México</option>
             <option type="text" name="estado" class="opciones">Estado de Mexico</option>
         </select>
         </div>
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="text" name="calle" placeholder="Ingrese el Nombre de la calle">
         </div>

         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="text" name="numero" placeholder="Ingrese el Número de la calle">
         </div>

         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="text" name="colonia" placeholder="Ingrese el Nombre de la colonia">
         </div>

         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="text" name="CP" placeholder="Ingrese el Código Postal">
         </div>

         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="text" name="municipio" placeholder="Ingrese el Nombre del municipio o Alcaldía">
         </div>


         <input type="submit" value="Registrar Pedido" name="RegistrarP" class="button">
         <p>Al registrar el pedido, acepta que todos los datos ingresados son correctos. NO hay modificaciones ni devoluciones. </p>
         <p>Si desea cancelar el pedido vaya al apartado de cancelaciones. 

        
     </div>
 <?php
            include('pedido2.php');
         ?>

    </form>
 </div>

 <style type="text/css">
     select{
        margin:0;
        padding: 0;
        width: 100%; 
        height: 40px;
     }
     option{
        font-size: 17px;
        color: brown;
     }

     input{
        width: 100%;
     }
 </style>
</body>
</html>
