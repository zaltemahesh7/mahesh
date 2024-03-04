<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn) echo "connected";


$userName = $_POST['newUser'];
$fname = $_POST['newName'];
$email = $_POST['email'];
$pass = $_POST['newPass'];

echo 'User name: '.$userName;
echo '<br>User Full Name: '.$fname;
echo '<br>User E-mail: '.$email;
echo '<br>User Password: '.$pass;

if(!$userName && !$email && !$pass){
$q1 = "insert into users (userName, email, password) values('$userName', '$email', '$pass')";
mysqli_query($conn, $q1);
}
else echo "<h2>Insert All Field</h2>";

?>