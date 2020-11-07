<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<h1>Inicia Sesión o registrate para votar</h1>
    
<?php include "footer.php";?>
