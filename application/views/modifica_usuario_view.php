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
			<a href="<?= base_url().'admin/add_mov'?>">Añadir Móvil</a>
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
		<h1> Modifica Usuario </h1>
	 <form method="POST" name="form_iniciar" action="<?php echo
			base_url().'admin/modifica_usuario/'.$usuario[0]->id?>">
	       <div class="form-group row">
	       	<div class="col-3">
		    <label for="exampleInputEmail1">Nombre</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $usuario[0]->nombre;?>" name="nombre">
			</div>
		 
		  	<div class="col-3">
		    <label for="exampleInputEmail">Correo</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $usuario[0]->correo;?>" name="correo">
			</div>
			<div class="col-3">
		    <label for="exampleInputEmail1">Nombre Usuario</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $usuario[0]->usuario;?>" name="usuario">
		</div>
		  </div>
		   <div class="form-group row">
		   	<div class="col-3">
		    <label for="exampleInputEmail1">Contraseña</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $usuario[0]->pass;?>" name="pass">
		  </div>
		  <div class="col-3">
		    <label for="exampleInputEmail1">Codigo</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $usuario[0]->codigo;?>" name="codigo">
		  </div>
		   <div class="col-3">
		    <label for="exampleInputEmail1">Estado</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $usuario[0]->estado;?>" name="estado">
		  </div>
		</div>
		  <button type="submit" class="btn btn-primary">Modificar</button>
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