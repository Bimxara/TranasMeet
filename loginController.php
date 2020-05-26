<?php
   include("database.php");
    session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $email = $_POST['email'];
      $password = $_POST['password']; 
      
      $sql = "SELECT * FROM userdetails WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $email = $row['email']; 
      $userID = $row['id']; 
      $name = $row['name']; 
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION["userID"] = $userID;
          $_SESSION["name"] = $name;
          $_SESSION["email"] = $email;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }else{
      echo "No";
   }
?>
