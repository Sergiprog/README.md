<?php
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "zsebmsay_0540", "54321v", "zsebmsay_0540");
if ($mysqli == false) {
  print("error");
} else {
  //print("Соединение установлено успешно");

  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $email = trim(mb_strtolower($_POST['email']));
  $pass = password_hash($_POST['pass']);

  $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");

  if ($result->num_rows != 0) {
    print("exist");
  } else {
    $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name', '$lastname', '$email', '$pass')");
    print("ok");
  }
}
