<?php
  if(!isset($_SESSION)) { 
  session_start();
}
  include "auth.php";
  include "header_voter.php"; 
?>
  <h4> Bienvenido <?php echo $_SESSION['SESS_NAME']; ?> </h4>
  <h3>Votar</h3>
  <h1>¿Cual es tu sistema favorito?</h1><br>
  
  <div class="formulario">
  <form action="submit_vote.php" name="vote" method="post" id="myform">
    <img src="img/debian.jpg" alt="" width="100px" height="100px"><br><br>
      <input type="radio" name="lan" value="Debian"> Debian <br><br>
      <img src="img/ubuntu.png" alt="" width="100px" height="100px"><br><br>
      <input type="radio" name="lan" value="Ubuntu"> Ubuntu <br><br>
      <img src="img/fedora.png" alt="" width="100px" height="100px"><br><br>
      <input type="radio" name="lan" value="Fedora"> Fedora <br><br>
      <img src="img/mac.png" alt="" width="100px" height="100px"><br><br>
      <input type="radio" name="lan" value="Mac"> Mac
 
  <?php global $msg; echo $msg; ?>
  <?php global $error; echo $error; ?>
  
    <div class="btn">
    <input type="submit" value="Enviar voto" name="submit" />
    </div>
  
</form>

  </div>