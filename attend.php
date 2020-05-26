<?php
include("database.php");
session_start();

$tripID = $_POST["tripID"];
$userID = $_POST["userID"];

 

$sql1 = "INSERT IGNORE  INTO attend (tripID, userID) VALUES ('$tripID', '$userID' )";

if ($conn->query($sql1) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>