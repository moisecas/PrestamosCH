<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Equipos prestados</h1> 
    	<input type="text" name="name" placeholder="Nombre completo del responsable"> 
    	<input type="text" name="email" placeholder="Escriba qué se presto">  
        <input type="text" name="lugar" placeholder="Lugar de uso">  
    	<input type="submit" name="register">
        <input type="submit" value= "consultar" class="btn btn info" name="consulta">
         
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>