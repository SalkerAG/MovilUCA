<!DOCTYPE HTML>
<html>
<head>
<title>Contacto</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('css/contacto.css')?>">
	<style>
	body{
		background-color: #e9ecef;
	}

	</style>
</head>
<body>

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="<?= base_url().'moviles/'?>">MovilUca</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= base_url().'moviles/'?>"> <i class="fas fa-home fa-sm pr-2"></i>Inicio</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= base_url().'catalogo'?>"><i class="fas fa-table fa-sm pr-2"></i>Catálogo</a>
	      </li>
	     
	    </ul>
	    <form class="form-inline mx-5 pr-3 my-lg-0" action="<?= base_url().'moviles'?>" method="post">
	      <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Buscar movil" aria-label="Buscar" >
	      <button class="btn btn btn-outline-light my-2 my-sm-0" value="buscar" type="submit" name="submit_m">Buscar </button>
	    </form>
	   <ul class="navbar-nav mr-5"> 
	    	<?php
	    		if (isset($_SESSION["usuario"])) {?>
	    			<li class="nav-item dropdown active">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				         <i class="far fa-user-circle fa-lg" style="padding-right: 10px;"></i><?=$_SESSION["usuario"]?>
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
				          <a class="dropdown-item" href="<?= base_url().'logout'?>">Logout</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Favoritos</a>
				        </div>
				      </li>
		        	
	        	
	        	<?php }else{ ?>
	        		<li class="nav-item active">
			         <a class="nav-link" href="<?= base_url().'usuarios'?>">Login<i class="fas fa-sign-in-alt fa-sm pl-2"></i></a>
			         <li class="nav-item active">
			        <a class="nav-link" href="<?= base_url().'usuarios/registro'?>">Registro&nbsp <i class="fas fa-user-plus"></i></a>
			      </li>
			      </li>
	        	<?php }
	       	?>
	      
	  </ul>
	  </div>
</nav>


<div class="cont">
	<form action="">
	  <h1>¡Ponte en contacto!</h1>
		<p>Envianos cualquier duda o sugerencia.</p>
		<center><div id="logo" class="far fa-envelope-open"></div></center>
		  <input name="name" type="text"
		placeholder="Nombre" id="name" required/>
		  
		  <input name="email" type="email"
		placeholder="Email" id="email" required/>
		  
		  <textarea name="text" placeholder="Mensaje"></textarea>

		   <input class="btn btn-outline-light" type="submit" value="Enviar" id="button-blue" style="background-color: #494949; "/>
		</form>


</div>
</body>
</html>