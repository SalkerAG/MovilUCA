<!DOCTYPE HTML>
<html>
<head>
<title><?php foreach($moviles as $movil):?><?= $movil->marca;?> <?= $movil->modelo;?><?php endforeach; ?></title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('css/un_movil.css')?>">
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
	    	<?php
	    		if (isset($_SESSION["usuario"])) {?>
	    			<li class="nav-item dropdown active">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				         <i class="far fa-user-circle fa-lg" style="padding-right: 10px;"></i><?=$_SESSION["usuario"]?>
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
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

<div class="container-fluid pt-5">
	
			<div style="padding-left: 85%; padding-top: 2%;">
				<?php if (isset($_SESSION["usuario"])) {?>
				<?= form_open(base_url().'un_movil/add_fav',
									array('name'=>'fav'));?>
					<input type="hidden" name="id_movil" value="<?= $movil->id;?>">
					<?php if (isset($_SESSION["usuario"])) {?><input type="hidden" name="id_usuario" value="<?=$_SESSION["usuario"]?>"><?php }?>
					<?php if($already_fav == 0) { ?>
						<button type="submit" value="Registrar" class="btn btn-outline-danger"name="elfavorito">Eliminar de Favoritos</button>
					
					<?php } else { ?>

					<button type="submit" value="Registrar" class="btn btn-outline-success" name="favorito">Añadir a favoritos</button>
					<?php } ?>
				<?= form_close(); ?>
					<?php } ?>
			</div>

	<div class="row" style="margin-bottom: 30px;">

		<div class="col-sm-5 " style="padding-top: 50px;">
	
		<?php foreach($moviles as $movil):?>
			<?php
	 				if($movil->disponibilidad == 0){?>
					<span class="tag rounded-right"><center><b>No disponible</b></center></span>
				<?php } ?>
			<img src="<?php echo base_url('images/'.$movil->foto.'')?>" class="img-responsive" alt="Responsive image"height="auto" width="300px" align="left">
			
			
			<h1><?= $movil->marca;?> <?= $movil->modelo;?></h1>
			<?php foreach($precio as $pmovil):?>
				<h4><?= $pmovil->precio;?>€  -  <?= $pmovil->tienda;?> <a href ="<?= $pmovil->url; ?>"  target="_blank"><i class="fas fa-external-link-alt fa-xs" ></i></a></h4>
			<?php endforeach; ?>
			<h4> Fecha de lanzamiento: <?= $movil->fecha_lanzamiento;?></h4>

		</div>
		<div class="col-sm-5">
	 		<table class="table table-sm " style="width: 600px; margin-left: 100px; margin-top: 50px;">
			 
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
		      <th scope="row" style="background-color: #e9ecef;">Bateria</th>
		      <td><?= $movil->bateria;?></td>
		    </tr>
		        <tr>
		      <th scope="row" style="background-color: #e9ecef;">Camara</th>
		      <td><?= $movil->camara;?></td>
		    </tr>
		    <tr>
		      <th scope="row" style="background-color: #e9ecef;">Peso</th>
		      <td><?= $movil->peso;?>g</td>
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
	</div>
	 <?php endforeach; ?>
</div>

<div class="container-fluid pt-5" style="padding-left:30px; background-color: white; padding-bottom: 30px;">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<h3 style="margin-top: -30px;">Puntuación</h3>
				<table class="table table-borderless table-sm" style="width: 500px;background-color: white">
				  <br>
				  <tbody>
			    <tr>
			      <th scope="row">Rendimiento</th>
			      <th> <?= bcdiv($puntuacionr[0]->total, '1', 2);?>/5</th>
			      <td ><div class="star-ratings" style="margin-top: -10px;">
					  <div class="fill-ratings" style="width: <?= ($puntuacionr[0]->total)*20;?>%;">
					    <span>★★★★★</span>
					  </div>
					  <div class="empty-ratings">
					    <span>★★★★★</span>
					  </div>
					</div></td>
			    </tr>
			        <tr>
			      <th scope="row">Bateria </th>
			      <th> <?= bcdiv($puntuacionb[0]->total, '1', 2);?>/5</th>
			      <td><div class="star-ratings" style="margin-top: -10px;">
					  <div class="fill-ratings" style="width: <?= 
					  $puntuacionb[0]->total*20;?>%;">
					    <span>★★★★★</span>
					  </div>
					  <div class="empty-ratings">
					    <span>★★★★★</span>
					  </div>
					</div></td>
			    </tr>
			        <tr>
			      <th scope="row">Diseño</th>
			      <th> <?= bcdiv($puntuaciond[0]->total, '1', 2);?>/5</th>
			      <td><div class="star-ratings" style="margin-top: -10px;">
					  <div class="fill-ratings" style="width: <?= ($puntuaciond[0]->total)*20;?>%;">
					    <span>★★★★★</span>
					  </div>
					  <div class="empty-ratings">
					    <span>★★★★★</span>
					  </div>
					</div></td>
			    </tr>
			        <tr>
			      <th scope="row">Pantalla </th>
			      <th> <?= bcdiv($puntuacionp[0]->total, '1', 2);?>/5</th>
			      <td><div class="star-ratings" style="margin-top: -10px;">
					  <div class="fill-ratings" style="width: <?= ($puntuacionp[0]->total)*20;?>%;">
					    <span>★★★★★</span>
					  </div>
					  <div class="empty-ratings">
					    <span>★★★★★</span>
					  </div>
					</div></td>
			    </tr>
				  </tbody>
				</table>
		</div>
		<div class="col-sm-5">
			<h3 style="margin-top: -30px;">Danos tu opinión</h3>
			<?= form_open(base_url().'un_movil/puntua',
						array('name'=>'puntuar'));?>
			<table class="table table-borderless table-sm" style="width: 500px;background-color: white">
				  <br>
				  <tbody>
			    <tr>
		      <th scope="row">Rendimiento</th>
		      <td>
		      	
		     <div class="star-rating">
    
			    <input id="star-5x" type="radio" name="rend" value="5" />
			    <label for="star-5x" title="5 stars">
			        <i class="fa fa-star"></i>
			    </label>

			    <input id="star-4x" type="radio" name="rend" value="4" />
			    <label for="star-4x" title="4 stars">
			        <i class="fa fa-star"></i>
			    </label>

			    <input id="star-3x" type="radio" name="rend" value="3" checked />
			    <label for="star-3x" title="3 stars">
			        <i class="fa fa-star"></i>
			    </label>

			    <input id="star-2x" type="radio" name="rend" value="2" />
			    <label for="star-2x" title="2 stars">
			        <i class="fa fa-star"></i>
			    </label>

			    <input id="star-1x" type="radio" name="rend" value="1" />
			    <label for="star-1x" title="1 star">
			        <i class="fa fa-star"></i>
			    </label>
			    
			</div>
		    </td>
		    </tr>
		        <tr>
		      <th scope="row">Bateria</th>
		      <td>
		      	<div class="star-rating">
	    
				    <input id="star-5xx" type="radio" name="bat" value="5" />
				    <label for="star-5xx" title="5 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-4xx" type="radio" name="bat" value="4" />
				    <label for="star-4xx" title="4 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-3xx" type="radio" name="bat" value="3" checked />
				    <label for="star-3xx" title="3 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-2xx" type="radio" name="bat" value="2" />
				    <label for="star-2xx" title="2 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-1xx" type="radio" name="bat" value="1" />
				    <label for="star-1xx" title="1 star">
				        <i class="fa fa-star"></i>
				    </label>
				    
				</div>

		      </td>
		    </tr>
		        <tr>
		      <th scope="row">Diseño</th>
		      <td>
		      	<div class="star-rating">
	    
				    <input id="star-5xxx" type="radio" name="dis" value="5" />
				    <label for="star-5xxx" title="5 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-4xxx" type="radio" name="dis" value="4" />
				    <label for="star-4xxx" title="4 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-3xxx" type="radio" name="dis" value="3" checked />
				    <label for="star-3xxx" title="3 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-2xxx" type="radio" name="dis" value="2" />
				    <label for="star-2xxx" title="2 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-1xxx" type="radio" name="dis" value="1" />
				    <label for="star-1xxx" title="1 star">
				        <i class="fa fa-star"></i>
				    </label>
				    
				</div>
		      </td>
		    </tr>
		        <tr>
		      <th scope="row">Pantalla</th>
		      <td>	      	
		      	<div class="star-rating">
	    
				    <input id="star-5xxxx" type="radio" name="pant" value="5" />
				    <label for="star-5xxxx" title="5 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-4xxxx" type="radio" name="pant" value="4" />
				    <label for="star-4xxxx" title="4 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-3xxxx" type="radio" name="pant" value="3" checked />
				    <label for="star-3xxxx" title="3 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-2xxxx" type="radio" name="pant" value="2" />
				    <label for="star-2xxxx" title="2 stars">
				        <i class="fa fa-star"></i>
				    </label>
				    <input id="star-1xxxx" type="radio" name="pant" value="1" />
				    <label for="star-1xxxx" title="1 star">
				        <i class="fa fa-star"></i>
				    </label>
				    
				</div>
			</td>
		    </tr>
			  </tbody>
			</table>
			<input type="hidden" name="id_movil" value="<?= $movil->id;?>">
			<input type="hidden" name="id_usuario" value="2">
			<button type="submit" value="Registrar" class="tam" name="puntuar">Puntuar</button>
						 <?= form_close(); ?>
		</div>
</div>
</div>
<div class="row">
		<div class="col-sm-7 col-sm-offset-1">
			<div class="comments">
				<h3>Comentarios: </h3>
					<div class="comment-wrap" style="padding-top: 20px; margin-left: 30px;">
							<div class="comment-block">
								<?= form_open(base_url().'un_movil/add_comment',
									array('name'=>'form_reg'));?>
									
											<input type="text" name="com" id=""  placeholder="Añade un comentario" required></input><br>
											<input type="hidden" name="id_movil" value="<?= $movil->id;?>">
											<?php if (isset($_SESSION["usuario"])) {?><input type="hidden" name="id_usuario" value="<?=$_SESSION["usuario"]?>"><?php }?>
			 						<?= form_submit('submit_reg', 'Comentar');?>
									 <?= form_close(); ?>

							</div>
					</div>
					<?php foreach($comentario as $comentariomov):?>	
					<div class="comment-wrap" style="margin-left: 30px;">
							<div class="comment-block">
									<h6><?= $comentariomov->nombre;?></h6>
									<p class="comment-text"><br><?= $comentariomov->com;?></p>
									<div class="bottom-comment">
											<div class="comment-date"><?= $comentariomov->fecha;?></div>
									</div>
							</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="col-sm-4 ">
			<div class="comments" style="margin-left: 20%;">
					<h3 style="padding-bottom: 10px;">Similares: </h3>
					
					<table class="table table-sm ">
			 
			  		<tbody>

			  			<?php for($i=0;$i<5;$i++){?>
			  				<?php if($sim[$i]->id != $moviles[0]->id){ ?>
			  			<tr>
			  			<th scope="row" style="background-color: white;">	
						<a cass="row" style=" color:black;" href="<?= base_url().'un_movil/mov/'.$sim[$i]->id?>">
							<img src="<?php echo base_url('images/'.$sim[$i]->foto.'')?>" class="img-responsive" alt="Responsive image"height="auto" width="150px" align="left">
							<h5><?= $sim[$i]->marca;?></h5>
							<h5><?= $sim[$i]->modelo;?></h5>
							<h6><?= $sim[$i]->procesador;?></h6>
							<h6>RAM: <?= $sim[$i]->ram;?></h6>
							<h6>Memoria: <?= $sim[$i]->memoria;?></h6>
						</a>
						</th>
						</tr>
						<?php }} ?>
					</tbody>
					
				</div>
		</div>
</div>
</body>
<script>
	$(document).ready(function() {
  // Gets the span width of the filled-ratings span
  // this will be the same for each rating
  var star_rating_width = $('.fill-ratings span').width();
  // Sets the container of the ratings to span width
  // thus the percentages in mobile will never be wrong
  $('.star-ratings').width(star_rating_width);
});
</script>

</html>