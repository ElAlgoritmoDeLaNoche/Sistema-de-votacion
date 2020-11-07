<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
include "connection.php";
?>
<h2><strong> Bienvenido <?php echo $_SESSION['SESS_NAME']; ?> </strong></h2>
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "Has votado por: " . " " . $row['voted'];
    } else {
        echo "<h1>Aún no has votado. ¡Envia tu voto!</h1>";
    }
}
?>