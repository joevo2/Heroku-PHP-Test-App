<?php
   require "../modal/function.php";

   $table = "users";
   $email = $_POST['email'];
   $password = $_POST['password'];

   function signIn() {
     session_start();
     if(!empty($_POST['email'])) {
       $query = pg_query("SELECT * FROM $table WHERE email = $email AND password = $password");
       $row = pg_fetch_array() or die(pg_last_error());
       if(!empty($row['email'])  && !empty($row['password'])) {
         $_SESSION['email'] = $row['password'];
         echo "SUCCESSFULL LOGIN TO USER PROFILE";
       } else {
         echo "WRONG ID AND PASSWORD";
       }
     }
   }

   if(isset($_POST['submit'])) {
     signIn();
   }
?>
