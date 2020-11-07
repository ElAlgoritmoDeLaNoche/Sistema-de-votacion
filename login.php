<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>

<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>

<div class="comment-section">
	<h1 class="comment-reply-title">Inicia Sesión para votar</h1>
	<form action="login_action.php" method="post" id="myform" class="comment-form">
		<div class="comment-form-surname">
			<input id="surname" placeholder="Nombre de usuario *" name="username" type="text" value="" size="30" maxlength="245" required>
			<label for="surname" data-help="">Nombre de usuario</label>
		</div>
		<div class="comment-form-surname">
			<input id="surname" placeholder="Contraseña *" name="password" type="text" value="" size="30" maxlength="245" required>
			<label for="surname" data-help="">Contraseña</label>
		</div>
		<div class="form-submit">
			<input type="submit" type="submit" id="submit" class="submit" name="login" value="Iniciar sesion">
		</div>
	</form>
</div>
<!-- 
    <form action="login_action.php" method="post" id="myform">
      Username :
      <input type="text" name="username" value="">
      <br>
      <br>
      Password :
      <input type="password" name="password" value="">
      <br>
      <br>
      <input type="submit" name="login" value="login">
    </form> -->


<script type="text/javascript">
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username", "req", "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req", "Please Enter Password");
</script>

<?php include "footer.php"; ?>