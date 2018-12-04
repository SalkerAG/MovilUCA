
<!doctype html>
<html>
<head>
 <title>Registro</title>
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
		    <form class="form-inline mx-5 pr-3 my-lg-0" action="<?= base_url().'moviles'?>" method="post">
	      <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Buscar movil" aria-label="Buscar" >
	      <button class="btn btn btn-outline-light my-2 my-sm-0" value="buscar" type="submit" name="submit_m">Buscar </button>
	    </form>
		     <ul class="navbar-nav mr-5"> 
	    <li class="nav-item active">
	        <a class="nav-link" href="<?= base_url().'usuarios'?>">Login<i class="fas fa-sign-in-alt fa-sm pl-2"></i></a>
	      </li>
		  </div>
	</nav>


  <div class="backRight" style="margin-top: 50px;"></div>
 	<div class="left">
      <div class="content "style="margin-top: -5%;">
        <h2><b>Registro</b></h2><br>
        <?php if(isset($mensaje)):?>
			 <h2><?= $mensaje?></h2>
			 <?php endif;?>
			 <?= form_open(base_url().'usuarios/verify_registro',
				array('name'=>'form_reg'));?>
       
         <label class="form-input" for="Usuario">
	        <i class="material-icons">person_outline</i>
	        <?= form_input('nombre',@set_value('nombre')) ?>
	        <span class="label"> <?= form_label('Nombre','Nombre'); ?>
	        </span>
	        <div class="underline"></div>
	      </label>
	       <label class="form-input"  for="contraseña">
	        <i class="material-icons">mail</i>
	        <?= form_input('correo',@set_value('correo')) ?>
	        <span class="label"> <?= form_label('Correo','Correo'); ?></span>
	        <div class="underline"></div>
	      </label>
	      <label class="form-input" for="Usuario">
	        <i class="material-icons">person</i>
	        <?= form_input('usuario',@set_value('usuario')) ?>
	        <span class="label"><?= form_label('Usuario','Usuario'); ?>
	        </span>
	        <div class="underline"></div>
	      </label>
	      <label class="form-input"  for="contraseña">
	        <i class="material-icons">lock</i>
	        <?= form_password('pass'); ?>
	        <span class="label"><?= form_label('Contraseña','Contraseña'); ?></span>
	        </span>
	        <div class="underline"></div>
	      </label>
	      <label class="form-input"  for="contraseña">
	        <i class="material-icons">lock</i>
	       <?= form_password('pass2'); ?> 
	        <span class="label"> <?= form_label('Repetir contraseña','Repetir_contraseña'); ?></span>
	        </span>
	        <div class="underline"></div>
	      </label>
	  <button type="submit" value="Registrar" class="btn1" name="submit_reg">Registrar</button>

	  <?= form_close(); ?>
         <?= validation_errors(); ?>
      </div>

    </div>

</body>
</html>