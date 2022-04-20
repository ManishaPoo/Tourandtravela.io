<?php

   $connection = mysqli_connect('localhost','root','','contact');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $request = " insert into contact_form(name, email, phone, subject, message) values('$name','$email','$phone','$subject','$message') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>