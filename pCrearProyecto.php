<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="js/jquery-1.12.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>HireMe</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<?php
	include("conexionbd.php");
?>
<body>		
	<header>
		
	</header>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="navbar-brand" href="pRepresentante.php"><img alt="" src="imagenes/Imagen1.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Proyectos<span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li><a href="pCrearProyecto.php">Crear Proyecto</a></li>
            <li><a href="pVerProyecto.php">Ver Proyectos</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Jefes de Proyecto<span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li><a href="pCrearJefeProyecto.php">Registrar Jefe de Proyecto</a></li>
            <li><a href="pVerJefeProyecto.php">Ver Jefes de Proyectos</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Cargos<span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li><a href="VerCargo.php">Gestionar de Cargos</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Habilidades<span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li><a href="pCrearEspecialidad.php">Registrar Habilidad</a></li>
          	<li><a href="pVerEspecialidad.php">Ver Habilidades</a></li>
          </ul>
        </li>
        <li><a href="#">Reportes</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Representante <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ver Perfil</a></li>
            <li><a href="logout.php">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>		
	<div class="col-sm-6 col-sm-offset-3 myform-cont">
		<h1>Crear Proyecto</h1>
			<div class="myform-bottom">
			<form action="crearProyecto.php" method="POST">
				Nombre: <input type="text" name="nombreproyecto" class="form-control" required="required">
				Descripcion: <br> <textarea name="descproyecto" class="form-control" required="required"></textarea> 
				Jefe de proyecto: <br>
				<select class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="rutJefe" value="Seleccione jefe de proyecto">
					<option value="">Seleccione jefe de proyecto</option>
					<?php
					$sql_listar="SELECT * FROM jefeproyecto ORDER BY apellidoJefeP ASC";
					$resultados=$conex->query($sql_listar);
					foreach ($resultados as $nombre) {					
				?>
					<option value="<?php echo $nombre['rutJefeP']; ?>"><?php echo $nombre['nombreJefeP']." ".$nombre['apellidoJefeP']; ?></option>
				<?php } ?>
			</select><br />
				Cantidad especialistas: <input type="text" name="cantproyecto" class="form-control" required="required">
				<br>
				<button type="submit" class="mybtn" value="Crear proyecto"> Crear proyecto
			</div>	
	</div>
</body>
</html>