<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from Contacto where id = ".$_GET["id"];
$query = $con->query($sql1);
$contacto = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $contacto=$r;
  break;
}

  }
?>

<?php if($contacto!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $contacto->Nombre; ?>" name="Nombre" required>
  </div>
  <div class="form-group">
    <label for="Apellidos">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $contacto->Apellidos; ?>" name="Apellidos" required>
  </div>
  <div class="form-group">
    <label for="Redes">Redes</label>
    <input type="text" class="form-control" value="<?php echo $contacto->Redes; ?>" name="Redes" required>
  </div>
  <div class="form-group">
    <label for="Telefono">Teléfono</label>
    <input type="Telefono" class="form-control" value="<?php echo $contacto->Telefono; ?>" name="Telefono" required >
  </div>
  <div class="form-group">
    <label for="Direccion">Dirección</label>
    <input type="text" class="form-control" value="<?php echo $contacto->Direccion; ?>" name="Direccion" required >
  </div>
<input type="hidden" name="id" value="<?php echo $contacto->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">No se encuentra</p>
<?php endif;?>