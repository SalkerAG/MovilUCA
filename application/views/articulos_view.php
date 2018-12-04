<html>
<head>
 <title><?= $titulo_web ?></title>
</head>
<body>
 <h1>Bienvenido a la web sobre artículos</h1>
 <a href="<?= base_url().'formulario/'?>" title="Añadir
articulo">Añadir articulo</a>
 <p>Estos son los artículos publicados.</p>
 <?php foreach($articulos as $fila):?>

 <a href="<?= base_url().'un_articulo/arti/'.$fila->titulo.'/'.$fila->descripcion.'/'.$fila->cuerpo?>" title="Ver articulo"><h2><?=
$fila->titulo; ?></h2></a>
 <p><?= $fila->descripcion; ?></p>
 <br/>
 <?php endforeach; ?>
</body>
</html>