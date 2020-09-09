<?php
$id = $_POST["sid"];
$dbh = new PDO("mysql:host=localhost;dbname=test", "root", "");
$sql = "DELETE FROM schoolstudents WHERE id = $id";
$getStudents = $dbh->prepare($sql) ;
$getStudents->execute();
?>
