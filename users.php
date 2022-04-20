<?php

   $connection = mysqli_connect('localhost','root','','login');

   if(isset($_POST['send'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

      $request = " insert into users(email, password) values('$email','$password') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>