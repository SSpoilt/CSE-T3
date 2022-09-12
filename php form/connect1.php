<?php

$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare( " SELECT * FROM registration WHERE email = '$email' && password = '$password' limit 1 ");
  $execval = $stmt->execute();
  echo $execval;
  echo "login successfully...";
  header("Location: http://localhost/registration.html");
  $stmt->close();
  $conn->close();
}
?>
