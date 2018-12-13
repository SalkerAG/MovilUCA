<!doctype html>
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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('css/catalogo.css')?>">
</head>
<body>

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">MovilUca</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
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
	    	<?php
	    		if (isset($_SESSION["usuario"])) {?>
	    			<li class="nav-item dropdown active">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				         <i class="far fa-user-circle fa-lg" style="padding-right: 10px;"></i><?=$_SESSION["usuario"]?>
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="<?= base_url().'logout'?>">Logout</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="<?= base_url().'favoritos'?>">Favoritos</a>
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
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"style="margin-top: 50px;">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="<?php echo base_url('images/'.'slider1.png'.'')?>" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php echo base_url('images/'.'slider2.png'.'')?>" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php echo base_url('images/'.'slider3.png'.'')?>" alt="Third slide">
	      <a class="btns" href="<?= base_url().'moviles/contacto'?>">Ponte en contacto</a>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

<div class="container-fluid pt-5" style="padding-top: 80px;padding-bottom: 100px;
	background-color: white;">
	<div class ="row" >
		<div class="col-sm-5 ">
			 <h2 style="padding-bottom: 20px;">Top Valorados</h2>	

					<?php
			 				if($valorados[0]->disponibilidad == 0){?>
							<span class="tag rounded-right"><center><b>No disponible</b></center></span>
						<?php } ?>
					<img src="<?php echo base_url('images/'.$valorados[0]->foto.'')?>" class="img-responsive" alt="Responsive image"height="auto" width="300px" align="left">
					
					<h1><?= $valorados[0]->marca;?> <?= $valorados[0]->modelo;?></h1>
					<h2>Desde: 
					<?= $preciop[0]->precio;?>€
					</h2>
					<div class="star-ratings">
					  <div class="fill-ratings" style="width: <?= ($valorados[0]->total)*10;?>%;position: relative;">
					    <span>★★★★★</span>
					  </div>
					  
					</div>
					 <h6 style="color:black; padding-left: 5px;"><?= bcdiv($valorados[0]->total, '1', 2);?>/5</h6>
					  <div><a href="<?= base_url().'un_movil/mov/'.$valorados[0]->id?> " class="btn btn-dark">Ver móvil</a></div>
		</div>
		 <div class="col-sm-5" style="margin-top: 80px; margin-left: 50px;">
	    	<table class="table ">
 			<tbody>
			 <?php for($i=1;$i<5;$i++){ ?>
		     <tr class="table-light">
		     	<th><?= bcdiv($valorados[$i]->total, '1', 2);?>/5</th>
		      <td scope="row"><img src="<?php echo base_url('images/'.$valorados[$i]->foto.'')?>" class="img-fluid" alt="Responsive image"height="auto" width="30px" align="left"></td>
		      <td><?= $valorados[$i]->marca;?></td>
		      <td><?= $valorados[$i]->modelo;?></td>
		      <td> <a href="<?= base_url().'un_movil/mov/'.$valorados[$i]->id?> " class="btn btn-outline-dark">Ver móvil</a></td> 
		    </tr>
		    <?php } ?>
		    <tr>
		   	
			</tr>
			<td>
 				<div><a href="<?= base_url().'valorados'?> " class="btn btn-dark">Ver todos</a></div>
 			</td>
		    </tbody></table>
	    </div>
	</div>

</div>

<div class="container-fluid pt-5" style="padding-top: 80px;padding-bottom: 100px;
	background-color: #e9ecef;">
	<div class ="row" >
		<div class="col-sm-5 ">
			 <h2 style="padding-bottom: 20px;">Novedades</h2>	

					<?php
			 				if($novedad[0]->disponibilidad == 0){?>
							<span class="tag rounded-right"><center><b>No disponible</b></center></span>
						<?php } ?>
					<img src="<?php echo base_url('images/'.$novedad[0]->foto.'')?>" class="img-responsive" alt="Responsive image"height="auto" width="300px" align="left">
					
					<h1><?= $novedad[0]->marca;?> <?= $novedad[0]->modelo;?></h1>
					<h2>Desde: 
					<?= $preciov[0]->precio;?>€
					</h2>
					<div class="star-ratings">
					  <div class="fill-ratings" style="width: <?= ($valorados[0]->total)*10;?>%;position: relative;">
					    <span>★★★★★</span>
					  </div>
					  
					</div>
					 <h6 style="color:black; padding-left: 5px;"><?= bcdiv($valorados[0]->total, '1', 2);?>/5</h6>
					  <div><a href="<?= base_url().'un_movil/mov/'.$novedad[0]->id?> " class="btn btn-dark">Ver móvil</a></div>
		</div>
		 <div class="col-sm-5" style="margin-top: 80px; margin-left: 50px;">
	    	<table class="table ">
 			<tbody>
			 <?php for($i=1;$i<5;$i++){ ?>
		     <tr class="table-light">
		     	<th style="background-color: #e9ecef;">
		     		<?= $novedad[$i]->fecha_lanzamiento;?></th>
		      <td scope="row" style="background-color: #e9ecef;
				"><img src="<?php echo base_url('images/'.$novedad[$i]->foto.'')?>" class="img-fluid" alt="Responsive image"height="auto" width="30px" align="left"></td>
		      <td style="background-color: #e9ecef;
				"><?= $novedad[$i]->marca;?></td>
		      <td style="background-color: #e9ecef;
				"><?= $novedad[$i]->modelo;?></td>
		      <td style="background-color: #e9ecef;
				"> <a href="<?= base_url().'un_movil/mov/'.$novedad[$i]->id?> " class="btn btn-outline-dark">Ver móvil</a></td> 
		    </tr>
		    <?php } ?>
		    <tr>
		   
			</tr>
			<td>
 				<div><a href="<?= base_url().'novedades'?> " class="btn btn-dark">Ver todos</a></div>
 			</td>
		    </tbody></table>
	    </div>
	</div>
</div>

<div class="container-fluid pt-5" style="padding-top: 80px;padding-bottom: 100px;
	background-color: white;">
	 <div class="row">
	 				<div class="col-sm-7" style="padding-top: 60px;padding-left: 200px;"><h2>¿No tienes una cuenta?</h2>
		      		<h5> Registrate para poder puntuar y compartir tus experiencias.</h5>
		      			
		      			 <a class="btn btn-outline-dark" href="<?= base_url().'usuarios/registro'?>" style="margin-top: 10px;">Registrarme</a>
		      			 
		      		</div>
		      		<div class="col-sm-3" style="padding-left: 80px;">
						<img src="<?php echo base_url('images/registrar.png')?>" class="img-responsive" alt="Responsive image" height="300px" width="auto" align="left" >
					</div>
		      		
		    	</div>

</div>
<div class="container-fluid pt-5" style="padding-top: 80px;padding-bottom: 100px;
	background-color: #e9ecef;">
	<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="margin-top: 50px;">
	  	
	    <div class="carousel-inner ">
	    	<div class="carousel-item active">
		     <div class="row">
		      		<div class="col-sm-10" style="padding-left: 40%;">
						<img src="<?php echo base_url('images/news.jpg')?>" class="img-responsive" alt="Responsive image" height="300px" width="auto" align="left" style="border:1px solid black; ">
					</div>

		      			
		      		
		    	</div>
		    </div>
	    	<?php foreach($noticias as $no):?>
	    	<div class="carousel-item ">
		    	<div class="row">
		      		<div class="col-sm-5" style="padding-left: 80px;">
						<img src="<?php echo base_url('images/'.$no->foto.'')?>" class="img-responsive" alt="Responsive image" height="300px" width="auto" align="left" style="border:1px solid black; ">
					</div>
		      		<div class="col-sm-5"><h2><?= $no->descrip;?></h2>
		      			<a class="btn btn-outline-dark" href="<?= $no->url;?> "  target="_blank" style="margin-top: 10px;">Visitar noticia</a>
		      			
		      		</div>
		    	</div>
		    </div>
		    <?php endforeach; ?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
		 <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
		
	</div>	
</div>


<div class="footer">
	

	<p><em>Ernesto José Custodio Gómez</em></p>
	<p><em>Juan Enrique Aicardo Nomeacuerdoquemas</em></p>

</div>
</body>
</html>