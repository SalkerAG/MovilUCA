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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>	
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
					        <a class="nav-link" href="<?= base_url().'moviles/'?>"> <i class="fas fa-home fa-sm pr-2"></i>Inicio</a>
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

		    <a href="<?= base_url().'admin/usuarios'?>">Usuarios</a>
		    <a href="<?= base_url().'admin/noticias'?>">Noticias</a>
		  </div>
		  <div class="dropdown-divider"></div>
		</div>
	
</div>

<table class="table table-borderless" style="margin-top:50px;margin-left: 200px; width: 1200px; text-align: center;">
  <thead>
    <tr>
      <th scope="col">Reseñas</th>
      <th scope="col">Moviles</th>
      <th scope="col">Usuarios</th>
      <th scope="col">Opiniones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><i class="far fa-star fa-5x"></i></th>
      <td><i class="fas fa-mobile-alt fa-5x"></i></td>
      <td><i class="far fa-user fa-5x"></i></td>
      <td><i class="far fa-comment fa-5x"></i></td>
    </tr>
    <tr>
      <td><?= $puntuacion[0]->count;?></th>
      <td><?= $moviles[0]->count;?></td>
      <td><?= $usuarios[0]->count;?></td>
      <td><?= $opiniones[0]->count;?></td>
    </tr>
    
  </tbody>
</table>

<hr>
<div class="row" style="margin-left: 300px; width: 80%;">
	<div class="col-sm-5">
	<canvas id="myChart"></canvas></div>
	<div class="col-sm-5">
	<canvas id="myChart2"></canvas></div>
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
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5"],
        datasets: [{
            label: 'Puntuaciones Rendimiento',
            data: [<?= $uno[0]->count; ?>, <?= $dos[0]->count; ?>, <?= $tres[0]->count; ?>, <?= $cuatro[0]->count; ?>, <?= $cinco[0]->count; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
<script>
var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5"],
        datasets: [{
            label: 'Puntuaciones diseño',
            data: [<?= $uno1[0]->count; ?>, <?= $dos1[0]->count; ?>, <?= $tres1[0]->count; ?>, <?= $cuatro1[0]->count; ?>, <?= $cinco1[0]->count; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</html>