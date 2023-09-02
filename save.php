<?php
$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message=$_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "database_form") or die("connection failed");
$sql = "INSERT INTO database_table(First_name, Last_name, Email, Mobile,Message) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
// header("location: http://localhost/database%20form/contactfrom.php");
header("location: http://localhost/php_classes/database%20form/contactfrom.php");
mysqli_close($conn);
?>