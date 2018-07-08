<?php
include "./php/conexion.php";

$user_id=null;
$sql1= "select * from usuario where id = ".$_GET["id"];
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

<form role="form" method="post" action="usuario/actualizar.php">
  <div class="form-group">
    <label for="user">Usuario</label>
    <input type="text" class="form-control" value="<?php echo $contacto->user; ?>" name="user" required>
  </div>
  <div class="form-group">
    <label for="pass">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $contacto->pass; ?>" name="pass" required>
  </div>
  <div class="form-group">
    <label for="email">Redes</label>
    <input type="email" class="form-control" value="<?php echo $contacto->email; ?>" name="email" required>
  </div>
  <input type="hidden" name="id" value="<?php echo $contacto->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">No se encuentra</p>
<?php endif;?>