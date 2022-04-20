<?php

   $connection = mysqli_connect('localhost','root','','register');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $request = " insert into register_form(name, address, phone, email, password) values('$name','$address','$phone','$email','$password') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>