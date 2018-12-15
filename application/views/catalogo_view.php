<!DOCTYPE HTML>
<html>
<head>
<title>Catálogo</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('css/catalogo.css')?>">
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
	        <a class="nav-link" href="<?= base_url().'moviles/contacto'?>"><i class="far fa-envelope fa-sm pr-2"></i>Contacto</a>
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
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="<?= base_url().'logout'?>">Logout</a>
				          <div class="dropdown-divider"></div>
				          <?php if ($_SESSION["usuario"] == "admin") {?>
				          	 <a class="dropdown-item" href="<?= base_url().'admin'?>">Panel de<br> Administración</a>
				          	<?php }else{ ?>
				          		<a class="dropdown-item" href="<?= base_url().'favoritos'?>">Favoritos</a>
				          	<?php } ?>
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

<div class="container-fluid pt-5">
	<div class="row" style="padding-top: 30px;">
	
	  <div class="col-sm-2 col-sm-offset-1" style="padding-top: 20px;">
	  	<?= form_open(base_url().'catalogo/busqueda',
				array('name'=>'form_reg'));?>
	  	<div class="tam" data-toggle="collapse" href="#marcas" role="button" aria-expanded="false" aria-controls="collapseExample">
	  		
			Marcas
 		</div>

		<div class="collapse" id="marcas">	  
			  <?php foreach($marca as $marc => $m):?>
				<div class="form-check" >
			  	<input class="form-check-input" type="checkbox" name="marca[]" value="<?= $m->marca;?>" id="" 
			  	<?php
			  		if(isset($_SESSION['marca']))
			  			 if (in_array($m->marca, $_SESSION['marca'])) echo 'checked'; ?> >
			 	 <label class="form-check-label" for="<?= $m->marca;?>">
			    <?= $m->marca;?>
			  	</label>
				</div>
			  <?php endforeach; ?>
			  <br>
			</div>
		<div class="tam" data-toggle="collapse" href="#procesador" role="button" aria-expanded="false" aria-controls="collapseExample">
			Procesador
 		</div>
		<div class="collapse" id="procesador">
			  <?php foreach($procesador as $pro => $p):?>
				<div class="form-check" >
			  	<input class="form-check-input" type="checkbox" name="procesador[]" value="<?= $p->procesador ?>" id="" 
			  	<?php 
			  		if(isset($_SESSION['procesador']))
			  			 if (in_array($p->procesador, $_SESSION['procesador'])) echo 'checked'; ?> >
			 	 <label class="form-check-label" for="<?= $m->marca;?>">
			 	 <label class="form-check-label" for="<?= $p->procesador;?>">
			 	 	<?= $p->procesador;?>
			  	</label>
				</div>
			  <?php endforeach; ?><br>
			</div>
		<div class="tam" data-toggle="collapse" href="#ram" role="button" aria-expanded="false" aria-controls="collapseExample">
			RAM
 		</div>
 			
		
		<div class="collapse" id="ram">
			  <?php foreach($ram as $ra => $r):?>
				<div class="form-check" >
			  	<input class="form-check-input" type="checkbox" name="ram[]" value="<?= $r->ram ?>" id=""
			  	<?php
			  		if(isset($_SESSION['ram']))
			  			 if (in_array($r->ram, $_SESSION['ram'])) echo 'checked'; ?> >
			 	 <label class="form-check-label" for="<?= $r->ram;?>">
			    <?= $r->ram?>
			  	</label>
				</div>
			  <?php endforeach; ?><br>
			</div>
		<div class="tam" data-toggle="collapse" href="#memoria" role="button" aria-expanded="false" aria-controls="collapseExample">
			Memoria
 		</div>
		<div class="collapse" id="memoria">
			  <?php foreach($memoria as $mem => $m):?>
				<div class="form-check" >
			  	<input class="form-check-input" type="checkbox" name="memoria[]" value="<?= $m->memoria;?>" id=""
			  	<?php
			  		if(isset($_SESSION['memoria']))
			  			 if (in_array($m->memoria, $_SESSION['memoria'])) echo 'checked'; ?> >
			 	 <label class="form-check-label" for="<?= $m->memoria;?>">
			    <?= $m->memoria;?>
			  	</label>
				</div>
			  <?php endforeach; ?><br>
			  
			</div>
			<button type="submit" value="submit" class="tam1" name="submit">Filtrar</button>
		<?= form_close(); ?>
		</div>

	<div class="row col-sm-8">
		<?php if (isset($moviles)) {?>
			<?php foreach($moviles as $movil => $m){;?>

				<figure class="snip1249 rounded ">
					<?php
		 			if($m->disponibilidad == 0){?>
						<span class="tag rounded-right">No disponible</span>
					<?php } ?>
				  	<div class="image" style="background-color:#F3F3F3;">
				    <img src="<?php echo base_url('images/'.$m->foto.'')?>" alt="sample85"/>
					 </div>
					 <figcaption>
					    <div style="height: 120px;"><h4><?= $m->marca;?> <?= $m->modelo;?></h4></div>
					    
					    <div class="price">
					      <?= $m->precio; ?>€

					    </div>

					    <div style="margin-top: -20px;"><a href="<?= base_url().'un_movil/mov/'.$m->id?> " class="add-to-cart rounded">Ver móvil</a></div><br>
					  </figcaption>
				</figure>

		<?php } ?>
	</div>  
		<?php 
			} else { ?>

			<h3>No hay coincidencias.</h3>
			<?php } ?>
			<div class="pagination" >
			<?php if (isset($links)) {?>
			    <?= $links; ?>
			<?php } ?>
			</div>			
	</div>
</body>
</html>


