<!DOCTYPE html>
<html>

<head>
</head>

<body>

<?php
$Forward = $_POST["Forward"];
$Left = $_POST["Left"];
$Stop = $_POST["Stop"];
$Right = $_POST["Right"];
$Backward = $_POST["Backward"];


$conn= new mysqli("localhost", "root", "", "db1");
$stmt=$conn->prepare("insert into tete(Forward,Leftt,Stop,Rightt,Backward) values(?,?,?,?,?);");
$stmt->bind_param("sssss", $Forward,$Left,$Stop,$Right,$Backward);
$stmt->execute();



?>


</body>
</hrml>