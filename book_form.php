<?php
   session_start();
   
   $connection = mysqli_connect('localhost','root','Mozammil@123','booking');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      $query_run=mysqli_query($connection, $request);

      if($query_run){
         $_SESSION['status']="Your booking is successful";
         header('location:book.php');
      }
   }else{
      echo 'something went wrong please try again!';
   }

   //Closing database connection
   $connection->close();

?>