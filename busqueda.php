<?php 
include ('database.php');
//if ($conexion!=true) {
//echo "Hubo un error con la conexion";
//}
//else
//{
    //echo "La conexion fue realizada con exito";}
?>
<table border="1" >
    <tr>
        <td>Tipo de Pastel</td>
        <td>Pastel seleccionado</td>
        <td>Día</td>
        <td>Mes</td>
        <td>Año</td>	
        <td>Hora</td>	
        <td>Precio</td>	
        <td>Pago</td>	
        <td>Cliente</td>   
        <td>Estado</td>   
        <td>Calle</td>   
        <td>No.</td>
        <td>Colonia</td>
        <td>C.P.</td>
        <td>Municipio</td>
    </tr>
    <?php 
    if (isset($_POST['BuscarP'])) 
    {
        if (strlen($_POST['sel_pastel']) >=1 &&
            strlen($_POST['dia']) >=1 &&
            strlen($_POST['mes']) >=1 &&
            strlen($_POST['ano']) >=1 &&
            strlen($_POST['hora']) >=1)
        {
            $sel_pastel = trim($_POST['sel_pastel']);
            $dia = trim($_POST['dia']);
            $mes = trim($_POST['mes']);
            $ano = trim($_POST['ano']);
            $hora = trim($_POST['hora']);
            $sql= "SELECT cake, cake_sel, day, month, year, time, cost, payment, person, state, street, nomber, niehborhood, PC, downtown FROM pedidos WHERE cake_sel='$sel_pastel' and day='$dia' and month='$mes' and year='$ano' and time='$hora'";
            if($sql==true)
            {
                $result=mysqli_query($conexion,$sql);
                echo "Los resultados fueron los siguientes:";
            while($mostrar=mysqli_fetch_array($result))
            {
            ?>
            <tr>
            <td><?php echo $mostrar['cake'];?></td>
            <td><?php echo $mostrar['cake_sel'];?></td>
            <td><?php echo $mostrar['day'];?></td>
            <td><?php echo $mostrar['month'];?></td>
            <td><?php echo $mostrar['year'];?></td>
            <td><?php echo $mostrar['time'];?></td>
            <td><?php echo $mostrar['cost'];?></td>
            <td><?php echo $mostrar['payment'];?></td>
            <td><?php echo $mostrar['person'];?></td>
            <td><?php echo $mostrar['state'];?></td>
            <td><?php echo $mostrar['street'];?></td>
            <td><?php echo $mostrar['nomber'];?></td>
            <td><?php echo $mostrar['niehborhood'];?></td>
            <td><?php echo $mostrar['PC'];?></td>
            <td><?php echo $mostrar['downtown'];?></td>
            </tr>
        <?php 
            }    
            }
            else{
                echo "Verifique la informacion por favor";
            }
        }
        else{
            echo "Ingrese la informacion correcta por favor";
        }
    }
 ?>
</table>