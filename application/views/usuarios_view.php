<!doctype html>
<html>
<head>
 <title>Login</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('css/login.css')?>">
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
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		    </ul>
		    <form class="form-inline mx-5 pr-3 my-lg-0">
		      <input class="form-control mr-sm-2" type="buscar" placeholder="Buscar movil" aria-label="Buscar">
		      <button class="btn btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
		    </form>
		  </div>
	</nav>


  <div class="backLeft"style="margin-top: 55px;"></div>
 	<div class="right"style="margin-top: 50px;">
      <div class="content">
        <h2><b>Login</b></h2><br>
        <form method="POST" name="form_iniciar" action="<?php echo
			base_url()?>usuarios/verify_sesion">
         <label class="form-input" for="Usuario">
	        <i class="material-icons">person</i>
	        <input type="text" name="user" autofocus="true" required />
	        <span class="label">Usuario</span>
	        <span class="underline"></span>
	      </label>
	      
	      <label class="form-input"  for="contraseña">
	        <i class="material-icons">lock</i>
	        <input type="password" name="pass" required />
	        <span class="label">Contraseña</span>
	        <div class="underline"></div>
	      </label>
          <a class=" btn1 off" style="color: #494949;" href="<?= base_url().'usuarios/registro'?>">Registro</a>
          <button type="submit" value="Entrar" class="btn1" name="submit">Login</button>
        </form>
      </div>
    </div>
    <!-- <h1>Iniciar sesión</h1>

		<form method="POST" name="form_iniciar" action="<?php echo
		base_url()?>usuarios/verify_sesion">

		 <label for="Usuario"> Usuario</label>
		 <input type="text" name="user" /> <br/>
		 <label for="contraseña"> Contraseña</label>
		 <input type="password" name="pass" /> <br/>
		 <input type="submit" value="Entrar" name="submit" /> <br/>
		 <a href="<?= base_url().'index.php/usuarios/registro'?>" title="Deseo registrarme">Registrarme</a>
		 </form>
		-->
</body>
</html>