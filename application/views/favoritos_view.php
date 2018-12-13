<!DOCTYPE HTML>
<html>
<head>
<title><?= $titulo_web ?></title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('css/catalogo.css')?>">
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
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= base_url().'moviles/contacto'?>"><i class="far fa-envelope fa-sm pr-2"></i>Contacto</a>
	      </li>
	     
	    </ul>
	    <form class="form-inline mx-5 pr-3 my-lg-0" action="<?= base_url().'moviles'?>" method="post">
	      <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Buscar movil" aria-label="Buscar" >
	      <button class="btn btn btn-outline-light my-2 my-sm-0" value="buscar" type="submit" name="submit_m">Buscar </button>
	    </form>
	   <ul class="navbar-nav mr-5"> 
	    			<li class="nav-item dropdown active">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				         <i class="far fa-user-circle fa-lg" style="padding-right: 10px;"></i><?=$_SESSION["usuario"]?>
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
				          <a class="dropdown-item" href="<?= base_url().'logout'?>">Logout</a>
				        </div>
				      </li>
	  </ul>
	  </div>
</nav>
<center><h1 style="padding-top: 70px; margin-bottom: -20px;"> Tus moviles favoritos</h1></center>
<?php foreach($moviles as $movil):?>
<div class="container-fluid pt-5">
	<div class="row" style="margin-bottom: 30px;">

			<div class="col-sm-5 " style="padding-top: 50px;">
				<img src="<?php echo base_url('images/'.$movil->foto.'')?>" class="img-responsive" alt="Responsive image"height="auto" width="225px" align="left">
				<h1><?= $movil->marca;?> <?= $movil->modelo;?></h1>
				 <div><a href="<?= base_url().'un_movil/mov/'.$movil->id?> " class="btn btn-outline-dark">Ver móvil</a></div>
			</div>
			<div class="col-sm-3">
		 		<table class="table table-sm " style="width: 400px; margin-left: 100px; margin-top: 40px;">
				 
				  <tbody>
			    <tr>
			      <th scope="row" style="background-color: #e9ecef;">Procesador</th>
			      <td><?= $movil->procesador;?> <?= $movil->velocidad;?></td>
			    </tr>
			        <tr>
			      <th scope="row" style="background-color: #e9ecef;">Memoria RAM</th>
			      <td><?= $movil->ram;?></td>
			    </tr>
			        <tr>
			      <th scope="row" style="background-color: #e9ecef;">Memoria</th>
			      <td><?= $movil->memoria;?>Gb</td>
			    </tr>
			        <tr>
			      <th scope="row" style="background-color: #e9ecef;">Camara</th>
			      <td><?= $movil->camara;?></td>
			    </tr>
			    <tr>
			      <th scope="row" style="background-color: #e9ecef;">Pantalla</th>
			      <td><?= $movil->pantalla;?></td>
			    </tr>
			    <tr>
			      <th scope="row" style="background-color: #e9ecef;">Version</th>
			      <td><?= $movil->version;?></td>
			    </tr>
				  </tbody>
				</table>
			</div>

			<hr>
			<hr>
			<div class="col-sm-2">
				<?= form_open(base_url().'favoritos/el_fav',
									array('name'=>'fav'));?>
				<button class="btn btn btn-outline-danger my-2 my-sm-0" value="buscar" type="submit" name="elfavorito" style="margin-top: 50px;">Eliminar de Favoritos </button>
				<input type="hidden" name="id_movil" value="<?= $movil->id;?>">
				<?= form_close(); ?>
			</div>
		</div>

		<hr>
		 <?php endforeach; ?>
		</div>
</body>
</html>