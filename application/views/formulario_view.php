<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>Nuevo artículo</title>
</head>
<body>
 <a href="<?= base_url().'articulos'?>"
title="Articulos">Articulos</a>
 <h1> Insertar artículo </h1>

 <?= form_open(base_url().'formulario/validar',
 array('name'=>'mi_form','id'=>'form'));?>
 <?= form_label('Titulo','Titulo',array('class'=>'label')); ?>
 <?= form_input('titulo','','class="input"') ?> <br />
 <br />
 <?= form_label('Descripción','Descripción',array('class'=>'label')); ?> <br/>
 <?= form_textarea('descripcion','','class="textarea" row="25px"'); ?> <br />
 <br />
 <?= form_label('Cuerpo','Cuerpo',array('class'=>'label')); ?> <br />
 <?= form_textarea('cuerpo','','class="textarea" row="50px"'); ?> <br />
 <?= form_submit('submit', 'Enviar datos','class="submit"');?>
 <?= form_close(); ?>

 <hr />
 <h3>Posibles errores</h3>
 <?= validation_errors(); ?>
</body>
</html>
