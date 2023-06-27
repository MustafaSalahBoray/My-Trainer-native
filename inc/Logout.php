<?php 
    session_start();
    if (isset($_SESSION['users'])) {
      $id=$_SESSION['users']->UserId;
      require '../DB_connect.php';
               $Update=$db->prepare("UPDATE users SET user_login='Logout' WHERE UserId=:id");
              $Update->bindparam("id",$id );
         if (  $Update->execute()) {
          // code... 
            echo "<script> window.open('http://localhost/My-Trainer%20native/login.php','_self')</script>";

         
                }
                        }






?>