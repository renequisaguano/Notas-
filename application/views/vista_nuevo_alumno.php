
<br>
<h1>INGRESO DE ESTUDIANTES</h1>
<hr>
<br>

<br>
<?= form_open('/alumnos/recibirDatos') ?>

<?php 

$CEDULA_EST=array(
	'name'=>'CEDULA_EST',
	'PLACEHOLDER'=>'Ingrese el numero de cedula'
	);


//creando los parametros para el texbox de entrada de datos

$NOMBRE_EST=array(
	'name'=>'NOMBRE_EST',
	'PLACEHOLDER'=>'Ingrese el nombre'

	);


$APELLIDO_EST=array(
	'name'=>'APELLIDO_EST',
	'PLACEHOLDER'=>'Ingrese el apellido'
	);


$DIRECCION_EST=array(
	'name'=>'DIRECCION_EST',
	'PLACEHOLDER'=>'Ingrese la direccion'
	);


$TELEFONO_EST=array(
	'name'=>'TELEFONO_EST',
	'PLACEHOLDER'=>'Ingrese el telefono',
	'SIZE'=>10
	);
 ?>


 <?= form_label('Cedula: ','CEDULA_EST') ?>
 <?= form_input($CEDULA_EST) ?>
 <br>
  <br>

 <?= form_label('Nombre: ','NOMBRE_EST') ?>
 <?= form_input($NOMBRE_EST) ?>
 <br>
  <br>

 <?= form_label('Apellido: ','APELLIDO_EST') ?>
 <?= form_input($APELLIDO_EST) ?>
 <br>
  <br>

 <?= form_label('Direccion: ','DIRECCION_EST')?>
 <?= form_input($DIRECCION_EST) ?>
 <br>
  <br>

 <?= form_label('Telefono: ','TELEFONO_EST') ?>
 <?= form_input($TELEFONO_EST) ?>
 <br>
 <BR>

 <?= form_submit('btnEnviar','Guardar')  ?>
 <?=  form_close() ?>


</body>
</html>