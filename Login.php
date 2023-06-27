<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>MY-TRAINER</title>
</head>

<body>
    <header>
        <?php
        require 'inc/Nav2.php'; 
         
        ?>
    </header>
    <div class="layer">
        <div class="container w-50  position-relative pb-5 ">
            <div class="img w-100 d-flex align-items-center justify-content-center ">
                <img class="w-75 m-auto position-relative" src="images/WhatsApp_Image_2022-10-21_at_19.06.33-removebg-preview.png" alt="" />
            </div>
            <form method="POST">
                <div class="mb-3">
                    <label htmlFor="exampleInputEmail1" class="form-label text-danger outline-dander">
                        Email address
                    </label>
                    <input type="email" class="form-control" name="Email" aria-describedby="emailHelp" />
                </div>
                <div class="mb-3 mb-2">
                    <label htmlFor="exampleInputEmail1" class="form-label text-danger outline-dander">
                        password
                    </label>
                    <input type="password" class="form-control"  min="8" name="password" aria-describedby="emailHelp" />
                </div>
                <div class="w-100 d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn btn-danger ">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php 
require 'DB_connect.php';

    if(isset($_POST['submit'])){
      $Login=$db->prepare("SELECT * FROM users WHERE Email=:Email AND password=:password");
      $Login->bindparam("Email",$_POST['Email']);
       $Login->bindparam("password",$_POST['password']);
       $Login->execute();
       if ($Login->rowcount()==1) {
          $users=$Login->fetchObject();
          
              session_start();
              $_SESSION['users']=$users;
               $Update=$db->prepare("UPDATE users SET user_login='Login' WHERE Email=:user_Email AND password=:user_pasword");
                        $Update->bindparam("user_Email",$_POST['Email'] );
         $Update->bindparam("user_pasword",$_POST['password'] );
          $Update->execute();
            echo "<script> alert('succesful')</script>"; 
          
                    echo "<script> window.open('Home.php','_self')</script>";

       
          }

         
    }


require 'inc/Footer.php';




?>