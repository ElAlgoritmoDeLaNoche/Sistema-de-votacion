<?php
include "connection.php";
session_start();
if(empty($_POST['lan'])){
$error="<center><h4><font color='#FF0000'>Por favor selecciona un sistema operativo!</h4></center></font>";
include"voter.php";
exit();
}
$lan = $_POST['lan'];
$sess = $_SESSION['SESS_NAME'] ;
$lan = addslashes($_POST['lan']);
$lan = mysqli_real_escape_string($con, $lan);
$sql = mysqli_query($con, 'SELECT * FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status="VOTED"');
if(mysqli_num_rows($sql) > 0 ) {
	$msg="<center><h4><font color='#FF0000'>ya has votado, no puedes voler a votar</h4></center></font>";
		include 'voter.php';
		exit();	
}
else{
$sql1 =mysqli_query($con, 'UPDATE languages SET votecount = votecount + 1 WHERE fullname = "'.$_POST['lan'].'"');
$sql2 =mysqli_query($con, 'UPDATE voters SET status="VOTED" WHERE username="'.$_SESSION['SESS_NAME'].'"');
$sql3 = mysqli_query($con, 'UPDATE voters SET voted= "'.$_POST['lan'].'" WHERE username="'.$_SESSION['SESS_NAME'].'"');
	if(!$sql1 && !$sql2){
	die("Error on mysql query".mysqli_error());
	}
	else{
	$msg="<center><h4><font color='#FF0000'>Felicidades, has hecho tu voto..</h4></center></font>";
	include 'voter.php';
	exit();
	}
}
?>