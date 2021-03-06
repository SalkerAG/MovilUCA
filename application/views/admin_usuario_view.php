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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" crossorigin="anonymous">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
</head>
<style >
	body{
		background-color: white;
	}
</style>
<body>

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="<?= base_url().'admin'?>"> Panel de Administración usuarioUca</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      
	    </ul>
	   
	   <ul class="navbar-nav mr-5"> 

	        		<li class="nav-item active">
				        <a class="nav-link" href="<?= base_url().'usuarioes/'?>"> <i class="fas fa-home fa-sm pr-2"></i>Inicio</a>
				      </li>
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
			<a href="<?= base_url().'admin/add_not'?>">Añadir Noticia</a>
			<div class="dropdown-divider"></div>
		  <button class="dropdown-btn">Tablas 
		    <i class="fa fa-caret-down"></i>
		  </button>

		  <div class="dropdown-container">
		    <a href="<?= base_url().'admin/moviles'?>">Moviles</a>
		    <a href="<?= base_url().'admin/noticias'?>">Noticias</a>
		  </div>
		  <div class="dropdown-divider"></div>
		</div>
	

<br>
<br>
<div class="row col-sm-12" style="padding-left: 300px; width: 50%">
	
		<table id="dt-usuarioes" class="table table-striped table-sm" style="margin-left: 100px; margin-top: 15px;">
										<thead>
											<tr>
												<th scope="col">Id</th>
											      <th scope="col">Nombre</th>
											      <th scope="col">Correo</th>
											      <th scope="col">Usuario</th>
											      <th scope="col">Contraseña</th>
											      <th scope="col">Código</th>
											      <th scope="col">Acciones</th>
											</tr>
										</thead>
										<tbody>
						<?php foreach ($usuario as $usuario) { ?>
											<tr>
												<td style="vertical-align: middle"><?= $usuario->id ?></td>
												<td style="vertical-align: middle"><?= $usuario->nombre ?></td>
												<td style="vertical-align: middle"><?= $usuario->correo ?></td>
												<td style="vertical-align: middle"><?= $usuario->usuario ?></td>
												<td style="vertical-align: middle"><?= $usuario->pass ?></td>
												<td style="vertical-align: middle"><?= $usuario->codigo ?></td>
												 <td><a href="<?= base_url().'admin/del_usuario/'.$usuario->id?>" 
    				onclick="return confirm('¿Estas seguro?');"><i class="fas fa-trash-alt" style="color:red;"></i><a> / <a href="<?= base_url().'admin/mod_usuario/'.$usuario->id?>"><i class="fas fa-edit" 
		      	style="color:green;"></i></a></td>
											</tr>
						<?php } ?>
										</tbody>
		</table>
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


<script>
	/* inicializar datatable */
$(document).ready(function() {
        $('#dt-usuarioes').DataTable({
            responsive: true,
            language: 
					{
						"sProcessing":     "Procesando...",
						"sLengthMenu":     "Mostrar _MENU_ registros",
						"sZeroRecords":    "No se encontraron resultados",
						"sEmptyTable":     "Ningún dato disponible en esta tabla",
						"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
						"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
						"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
						"sInfoPostFix":    "",
						"sSearch":         "Buscar:",
						"sUrl":            "",
						"sInfoThousands":  ",",
						"sLoadingRecords": "Cargando...",
						"oPaginate": {
							"sFirst":    "Primero",
							"sLast":     "Último",
							"sNext":     "Siguiente",
							"sPrevious": "Anterior"
						},
						"oAria": {
							"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
							"sSortDescending": ": Activar para ordenar la columna de manera descendente"
						}
					}
        });
    });	
</script>

</html>