<?php
$mysqli = new mysqli("localhost", "root", "", "test");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
?>

<?php
// $userName = $_POST['newUser'];
// $fname = $_POST['newName'];
// $email = $_POST['email'];
// $pass = $_POST['newPass'];

// echo 'User name: ' . $userName;
// echo '<br>User Full Name: ' . $fname;
// echo '<br>User E-mail: ' . $email;
// echo '<br>User Password: ' . $pass;
?>
