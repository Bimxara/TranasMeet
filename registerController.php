<?php
include("database.php");
session_start();

$email = $_POST["email"];
$name = $_POST["name"];
$address = $_POST["address"];
$occupation = $_POST["occupation"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$areas = $_POST["areas"];

 

$sql1 = "INSERT INTO userdetails (email, name, address, occupation, mobile, password, areas)
VALUES ('$email', '$name' , '$address', '$occupation', '$mobile', '$password', '$areas')";

if ($conn->query($sql1) === TRUE) {
	$userID = $conn->insert_id;
	 $_SESSION["name"] = $name;
     $_SESSION["email"] = $email;
     $_SESSION["userID"] = $userID;
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>