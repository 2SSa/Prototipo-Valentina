	<!DOCTYPE html>
	<html lang="es">
	<head>
		<title>Nuevo Paciente</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<meta charset="utf-8">
	</head>

	<body>
	<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#96cf07;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <img src="images/logo.png" alt="Card image cap" width="100 px" height="50 px">
				<a class="navbar-brand">Analysts Next Level</a>
                
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
					</li>
				</ul>   
			</div>
		</nav>
	</nav>
		<?php
			$valor = $_GET['palabra'];
		?>
		<br>
<div class="container">
<br>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="alert alert-danger">El usuario no se encuentra registrado, por favor ingrese los datos</div>
	</div>

		<div class="row">
  			<div class="col-md-4"><h3>Datos del paciente</h3></div>  			
  			<div class="col-md-4"></div>							
		</div>
		<form action="paciente.php" method="GET">

  			<div class="row">
  				<div class="col-md-2">
  				</div>
				<div class="col-xs-12 col-md-8">
					<div class="form-group">
    				<label for="exampleFormControlInput1">DPI</label>
    				<input type="text" class="form-control form-control-lg" id="dpi" placeholder="DPI sin espacios" name="dpi" required="" value="<?php echo $valor ?>">
  					</div>
				</div>				
			</div>

			<div class="row">
  				<div class="col-md-2">
  				</div>
				<div class="col-xs-12 col-md-8">
					<div class="form-group">
    				<label for="exampleFormControlInput1">Nombre</label>
    				<input type="text" class="form-control form-control-lg" id="nombre" placeholder="Nombre del paciente" name="nombre" required="">
  					</div>
				</div>
			</div>

			<div class="row">
  				<div class="col-md-2">
  				</div>
				<div class="col-xs-12 col-md-8">
					<div class="form-group">
    				<label for="exampleFormControlInput1">Apellidos</label>
    				<input type="text" class="form-control form-control-lg" id="apellidos" placeholder="Apellidos del paciente" name="apellidos" required="">
  					</div>
				</div>
			</div>

			<div class="row">
  				<div class="col-md-2">
  				</div>
				<div class="col-xs-12 col-md-8">
					<div class="form-group">
    				<label for="exampleFormControlInput1">Teléfono</label>
    				<input type="text" class="form-control form-control-lg" id="telefono" placeholder="Número de teléfono sin espacios" name="telefono" required="">
  					</div>
				</div>
			</div>

			<div class="row">
  				<div class="col-md-2">
  				</div>
				<div class="col-xs-12 col-md-8">
					<div class="form-group">
    				<label for="exampleFormControlInput1">Dirección</label>
    				<input type="text" class="form-control form-control-lg" id="direccion" placeholder="Dirección exacta del paciente" name="direccion" required="">
  					</div>
				</div>
			</div>


    				<div class="row">
    					<div class="col-md-2">    						
    					</div>
        				<div class="col-xs-12 col-md-8">
            				<div class="form-group">
            					<label for="exampleFormControlInput1">Fecha de nacimiento</label>
            					<br><input type="date" name="fecha" id="fecha" name="fecha" required="">
        					</div>
    					</div>
    				</div>
    			
    			<center>
    			<div class="row">    
    			    <div class="col-md-5">    						
    				</div>			
    				<div class="col-md-2">    						
    					<input type="submit" value="Enviar" name="" class="btn btn-primary btn-lg">    		
    				</div>	    					
    			</div>
    			</center>
		</form>

		<center>			    
	    </center>
</div>		
	</body>
	</html>