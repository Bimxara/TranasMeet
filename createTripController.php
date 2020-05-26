<?php
include("database.php");
session_start();

$destination = $_POST["destination"];
$dates = $_POST["dates"];
$pdate = $_POST["pdate"];
$ptime = $_POST["ptime"];
$topics = $_POST["topics"];
$description = $_POST["description"];
$user = $_POST["user"];

 

$sql1 = "INSERT INTO trips (destination, dates, pdate, ptime, topics, description, user)
VALUES ('$destination', '$dates' , '$pdate', '$ptime', '$topics', '$description', '$user')";

if ($conn->query($sql1) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>