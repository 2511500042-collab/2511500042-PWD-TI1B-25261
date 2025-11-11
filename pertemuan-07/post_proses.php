 <?php
  session_start();
  $_SESSION["name"] = $_POST["txtNama"];
  $_SESSION["email"] = $_POST["txtEmail"];
  $_SESSION["pesan"] = $_POST["txtPesan"];
  echo $_SESSION["name"] .  $_SESSION["email"] .  $_SESSION["pesan"];
 # header("Location: post.php");
  ?>