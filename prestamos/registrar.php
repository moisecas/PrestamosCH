<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
        $lugar = trim($_POST['lugar']); 
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg, Lugar) VALUES ('$name','$email','$fechareg','$lugar')"; 
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Registrado!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
if (isset($_POST['consulta']))
$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM datos";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $nombre = $row['nombre'];
	    $email = $row['email'];
	    $fechareg = $row['fecha_reg'];
        $lugar = $row['Lugar']; 
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>ID: </b> <?php echo $id ?><br>
        		    <b>Equipo: </b> <?php echo $email ?><br>
        		    <b>Fecha Registro: </b> <?php echo $fechareg ?><br>
                    <b>Lugar: </b> <?php echo $lugar ?><br>  
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}

?>