<!doctype html>
<html>
<head>
 <title>Panel de administración</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('css/admin.css')?>">
	<script type="text/javascript">
	function CheckMarca(val){
 	var element=document.getElementById('color');
 	if(val=='pick a color'||val=='others')
   		element.style.display='block';
 	else  
   	element.style.display='none';
	}	
	function CheckPantalla(val){
 	var element=document.getElementById('color');
 	if(val=='pick a color'||val=='others')
   		element.style.display='block';
 	else  
   	element.style.display='none';
	}
	</script>  
</head>
<style >
	body{
		background-color: white;
	}
</style>
<body>

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#"> Panel de Administración MovilUca</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      
	    </ul>
	   
	   <ul class="navbar-nav mr-5"> 

	        		<li class="nav-item active">
			         <a class="nav-link" href="<?= base_url().'logout'?>">Logout<i class="fas fa-sign-out-alt fa-sm pl-2"></i></a>		         
			      </li>
	  </ul>
	  </div>
</nav>
<div class="container-fluid pt-5" >
		<div class="sidenav" style="padding-top: 100px;">
			<div class="dropdown-divider"></div>

		  <button class="dropdown-btn">Tablas 
		    <i class="fa fa-caret-down"></i>
		  </button>

		  <div class="dropdown-container">
		    <a href="<?= base_url().'admin/moviles'?>">Moviles</a>

		    <a href="<?= base_url().'admin/usuarios'?>">Usuarios</a>
		  </div>
		  <div class="dropdown-divider"></div>
		</div>
	
</div>

	<div class=" col-sm-12" style="padding-left: 250px;padding-top: 20px;padding-bottom: 20px;">
		<h1> Insertar móvil </h1>
	 <form method="POST" name="form_iniciar" action="<?php echo
			base_url().'admin/add_movil'?>">
	       <div class="form-group row">
	       	<div class="col-3">
		    <label for="exampleInputEmail1">Marca</label>
		    <input name="marca" list="exampleList" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca marca">
			<datalist id="exampleList">
			<?php foreach ($marca as $marca) {  ?>
				<option value="<?= $marca->marca ?>">
			<?php } ?>
			</datalist>
		  
		  </div>
		  <div class="col-3">
		    <label for="exampleInputEmail1">Modelo</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca modelo" name="modelo">
		  </div>
		  <div class="col-3">
		    <label for="exampleInputEmail1">Fecha de lanzamiento</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Formato YY-MM-DD" name="fecha_lanzamiento">
		  </div>
		</div>
		 <div class="form-group row">
		 	<div class="col-6">
		    <label for="exampleFormControlFile1">Foto</label>
		    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
		  </div>
		</div>
		  
		  <h2> Prestaciones </h2>
		   <div class="form-group row ">
		   	<div class="col-3">
		    <label for="exampleInputEmail1">Pantalla</label>
		    <input name="pantalla" list="pantallaList" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca pantalla">
			<datalist id="pantallaList">
			<?php foreach ($pantalla as $pantalla) {  ?>
				<option value="<?= $pantalla->pantalla ?>">
			<?php } ?>
			</datalist>
		  </div>
		  <div class="col-3">
		    <label for="exampleInputEmail1">Procesador</label>
		    <input type="text" name="procesador" list="procesadorList" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca procesador">
			<datalist id="procesadorList">
			<?php foreach ($procesador as $procesador) {  ?>
				<option value="<?= $procesador->procesador ?>">
			<?php } ?>
			</datalist>
		  </div>
		   <div class="col-3">
		    <label for="exampleInputEmail1">Velocidad</label>
		    <input type="text" name="velocidad" list="velocidadList" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca velocidad">
			<datalist id="velocidadList">
			<?php foreach ($velocidad as $velocidad) {  ?>
				<option value="<?= $velocidad->velocidad ?>">
			<?php } ?>
			</datalist>
		  </div>
		</div>
		  <div class="form-group row">
		  	<div class="col-3">
		    <label for="exampleInputEmail1">Ram</label>
		    <input type="text" name="ram" list="ramList" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca ram">
			<datalist id="ramList">
			<?php foreach ($ram as $ram) {  ?>
				<option value="<?= $ram->ram ?>">
			<?php } ?>
			</datalist>
		  </div>
		  <div class="col-3">
		    <label for="exampleInputEmail1">Memoria</label>
		    <input type="text" name="memoria" list="memoriaList" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca memoria">
			<datalist id="memoriaList">
			<?php foreach ($memoria as $memoria) {  ?>
				<option value="<?= $memoria->memoria ?>">
			<?php } ?>
			</datalist>
		  </div>
		  <div class="col-3">
		    <label for="exampleInputEmail1">Camara</label>
		    <input type="text" name="camara" list="camaraList" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca camara">
			<datalist id="camaraList">
			<?php foreach ($camara as $camara) {  ?>
				<option value="<?= $camara->camara ?>">
			<?php } ?>
			</datalist>
		  </div>
		</div>
		   <div class="form-group row">
		   	<div class="col-3">
		    <label for="exampleInputEmail1">Peso</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca Peso" name="peso">
		  </div>
		  <div class="col-3">
		    <label for="exampleInputEmail1">Version</label>
		    <input type="text" name="version" list="versionList" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca version">
			<datalist id="versionList">
			<?php foreach ($version as $version) {  ?>
				<option value="<?= $version->version ?>">
			<?php } ?>
			</datalist>
		  </div>
		   <div class="col-3">
		    <label for="exampleInputEmail1">Bateria</label>
		    <input type="text" name="bateria" list="bateriaList" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca bateria">
			<datalist id="bateriaList">
			<?php foreach ($bateria as $bateria) {  ?>
				<option value="<?= $bateria->bateria ?>">
			<?php } ?>
			</datalist>
		  </div>
		</div>
		  <h2> Precio y tienda </h2>
		  <div class="form-group row">
		  	<div class="col-3">
		    <label for="exampleInputEmail1">Precio</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca el precio de venta" name="precio">
		  </div>
		  <div class="col-3">
		    <label for="exampleInputEmail1">Tienda</label>
		    <input type="text" name="tienda" list="tiendaList" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca tienda">
			<datalist id="tiendaList">
			<?php foreach ($tienda as $tienda) {  ?>
				<option value="<?= $tienda->tienda ?>">
			<?php } ?>
			</datalist>
		  </div>
		   <div class="col-3">
		    <label for="exampleInputEmail1">URL tienda</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca URL de la tienda" name="url">
		  </div>
		</div>
		  <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
    </div>
</body>
<script >
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
	    this.classList.toggle("active");
	    var dropdownContent = this.nextElementSibling;
	    if (dropdownContent.style.display === "block") {
	      dropdownContent.style.display = "none";
	    } else {
	      dropdownContent.style.display = "block";
	    }
	  });
	}
</script>
</html>