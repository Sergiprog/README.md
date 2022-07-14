<?php
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "zsebmsay_0540", "54321v", "zsebmsay_0540");
if ($mysqli == false) {
  print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
} else {
$email = trim(mb_strtolower($_POST['email']));
$pass = trim($_POST['pass']);

$result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

if ($result->num_rows == 0) {
   echo("no_registration");
}else{
   echo("ok");
}
}

?>
