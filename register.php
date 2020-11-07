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
	<h1 class="comment-reply-title">Registrate</h1>
	<form action="reg_action.php" method="post" id="myform" class="comment-form">
		<div class="comment-form-name">
			<input id="name" placeholder="Nombre *" name="firstname" type="text" value="" pattern="^[^0-9]+$" size="30" maxlength="245" required>
			<label for="name" data-help="¿Are you 11 from Stranger Things?">Nombre</label>
		</div>
		<div class="comment-form-surname">
			<input id="surname" placeholder="Apellido *" name="lastname" type="text" value="" size="30" maxlength="245" required>
			<label for="surname" data-help="A girl has no name- Arya Stark">Apellido</label>
		</div>
		<div class="comment-form-surname">
			<input id="surname" placeholder="Nombre de usuario *" name="username" type="text" value="" size="30" maxlength="245" required>
			<label for="surname" data-help="">Nombre de usuario</label>
		</div>
		<div class="comment-form-surname">
			<input id="surname" placeholder="Contraseña *" name="password" type="text" value="" size="30" maxlength="245" required>
			<label for="surname" data-help="">Contraseña</label>
		</div>


		<div class="form-submit">
			<input name="submit" type="submit" id="submit" class="submit" name="submit" value="Registrarme">
		</div>
	</form>
</div>
<!-- <form action="reg_action.php" method="post" id="myform">
		
		<input type="text" name="firstname" value="" placeholder="Nombre:"/>
		<input type="text" name="lastname" value="" placeholder="Apellido:"/>
		<input type="text" name="username" value="" placeholder="Nombre de usuario:"/>
		<input type="password" name="password" value="" placeholder="Password:"/>

		<input type="submit" name="submit" value="Next" class="btn"	/>
	</form>

</div> -->

<script type="text/javascript">
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("firstname", "req", "Please enter student firstname");
frmvalidator.addValidation("firstname", "maxlen=50");
frmvalidator.addValidation("lastname", "req", "Please enter student lastname");
frmvalidator.addValidation("lastname", "maxlen=50");
frmvalidator.addValidation("username", "req", "Please enter student username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req", "Please enter student password");
frmvalidator.addValidation("password", "minlen=6", "Password must not be less than 6 characters.");
</script>
<?php include "footer.php" ;?>