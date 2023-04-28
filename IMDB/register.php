<?php
   $db_hostname="localhost:3307";
   $db_username="root";
   $db_password="";
   $db_name="imdb";

   $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
   if(!$conn)
   {
    echo "Connection failed: ".mysqli_connect_error();
    exit;
   }

   $name=$_POST['logname'];
   $email=$_POST['logemail'];
   $password=$_POST['logpass'];

   $sql="INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";

   $result=mysqli_query($conn,$sql);
   if(!$result)
   {
    echo "Error: ".mysqli_error($conn);
    exit;
   }
   

   mysqli_close($conn);
   
?>