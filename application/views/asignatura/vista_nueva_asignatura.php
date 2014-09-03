
<br>
<center>
<h1>INGRESO DE ASIGNATURAS</h1>
</center>
<hr>
<br>

<?php 


$nombre=array(
	'name'=>'txtnombre',
	'placeholder'=>'Ingrese el nombre de la asignatura'
	);

$creditos=array(
	'name'=>'txtcreditos',
	'placeholder'=>'Ingrese el numero de creditos'
	);


 ?>

<?= form_open('/asignaturas/recibirDatos')?>
Nombre: 
<?= form_input($nombre) ?>
<br>
Numero de Creditos:
<?= form_input($creditos) ?>
<br>
<?= form_submit('btnenviar','Guardar')  ?>
<?= form_close() ?>




</body>
</html>