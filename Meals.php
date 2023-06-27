<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/meals.csscss?virsion=1">
    <?php  session_start();?>
	<title>MY-Trainer</title>
    <style>
        @media (min-width: 576px) {
            .card-col {
                margin-bottom: 20px;
            }
          /*  img
            {
                height: 100px;
                width: 100px;
                object-fit: contain;
            }*/
            .meals .meal img {
  width: 100px;
  height: 100px;
}
        }
    </style>
</head>
<body>

	<?php 

    require 'inc/Nav.php';  
    require'DB_connect.php';
 
 if (isset($_SESSION['users'])) {
      
    if ($_SESSION['users']->Calories <= 1300){

      echo'  <section class="section profile">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <form method="POST">
                                <ul class="nav nav-tabs nav-tabs-bordered">
                                 
                                    <li class="nav-item ">
                                        <button class="nav-link "name="Day1" value="Day1">Day1</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" name="Day2" value="Day2">Day2</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day3" value="Day3">Day3</button>
                                    </li>
                                     <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day4" value="Day3">Day4</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day5" value="Day3">Day5</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day6" value="Day3">Day6</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day7" value="Day7">Day7</button>
                                    </li>
                                 
                                </ul></form>
                             </div></div></div></div></section>';
      
       if (isset($_POST['Day1'])|| isset($_POST['Day4'])||isset($_POST['Day7'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor1300  WHERE Days='Day1'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
        elseif (isset($_POST['Day2'])||isset($_POST['Day5'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor1300  WHERE Days='Day2'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
          elseif (isset($_POST['Day3'])||isset($_POST['Day6'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor1300  WHERE Days='Day3'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
       

      

    }
   
   elseif ( in_array ($_SESSION['users']->Calories, range(1301,1600)) ){
     echo'  <section class="section profile">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <form method="POST">
                                <ul class="nav nav-tabs nav-tabs-bordered">
                                 
                                    <li class="nav-item ">
                                        <button class="nav-link "name="Day1" value="Day1">Day1</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" name="Day2" value="Day2">Day2</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day3" value="Day3">Day3</button>
                                    </li>
                                     <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day4" value="Day3">Day4</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day5" value="Day3">Day5</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day6" value="Day3">Day6</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day7" value="Day7">Day7</button>
                                    </li>
                                 
                                </ul></form>
                             </div></div></div></div></section>';
      
       if (isset($_POST['Day1'])|| isset($_POST['Day4'])||isset($_POST['Day7'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor1600  WHERE Days='Day1'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
        elseif (isset($_POST['Day2'])||isset($_POST['Day5'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor1600  WHERE Days='Day2'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
          elseif (isset($_POST['Day3'])||isset($_POST['Day6'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor1600  WHERE Days='Day3'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
       

      
   }
         
    elseif ( in_array ($_SESSION['users']->Calories, range(1601,1700)) ){ echo'  <section class="section profile">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <form method="POST">
                                <ul class="nav nav-tabs nav-tabs-bordered">
                                 
                                    <li class="nav-item ">
                                        <button class="nav-link "name="Day1" value="Day1">Day1</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" name="Day2" value="Day2">Day2</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day3" value="Day3">Day3</button>
                                    </li>
                                     <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day4" value="Day3">Day4</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day5" value="Day3">Day5</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day6" value="Day3">Day6</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day7" value="Day7">Day7</button>
                                    </li>
                                 
                                </ul></form>
                             </div></div></div></div></section>';
      
       if (isset($_POST['Day1'])|| isset($_POST['Day4'])||isset($_POST['Day7'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor1700  WHERE Days='Day1'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
        elseif (isset($_POST['Day2'])||isset($_POST['Day5'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor1700  WHERE Days='Day2'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
          elseif (isset($_POST['Day3'])||isset($_POST['Day6'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor1700  WHERE Days='Day3'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
       

      }

                           
             
    elseif ( in_array ($_SESSION['users']->Calories, range(1701,2500)) ){
         echo'  <section class="section profile">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <form method="POST">
                                <ul class="nav nav-tabs nav-tabs-bordered">
                                 
                                    <li class="nav-item ">
                                        <button class="nav-link "name="Day1" value="Day1">Day1</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" name="Day2" value="Day2">Day2</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day3" value="Day3">Day3</button>
                                    </li>
                                     <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day4" value="Day3">Day4</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day5" value="Day3">Day5</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day6" value="Day3">Day6</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day7" value="Day7">Day7</button>
                                    </li>
                                 
                                </ul></form>
                             </div></div></div></div></section>';
      
       if (isset($_POST['Day1'])|| isset($_POST['Day7'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor2500  WHERE Days='Day1'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
        elseif (isset($_POST['Day2'])||isset($_POST['Day6'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor2500  WHERE Days='Day2'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
          elseif (isset($_POST['Day3'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor2500  WHERE Days='Day3'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
       elseif (isset($_POST['Day4'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor2500  WHERE Days='Day4'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
       elseif (isset($_POST['Day5'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor2500  WHERE Days='Day5'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
       

      
    }

            
     elseif ( in_array ($_SESSION['users']->Calories, range(2501,3000)) ){
  echo'  <section class="section profile">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <form method="POST">
                                <ul class="nav nav-tabs nav-tabs-bordered">
                                 
                                    <li class="nav-item ">
                                        <button class="nav-link "name="Day1" value="Day1">Day1</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" name="Day2" value="Day2">Day2</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day3" value="Day3">Day3</button>
                                    </li>
                                     <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day4" value="Day3">Day4</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day5" value="Day3">Day5</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day6" value="Day3">Day6</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day7" value="Day7">Day7</button>
                                    </li>
                                 
                                </ul></form>
                             </div></div></div></div></section>';
      
       if (isset($_POST['Day1'])|| isset($_POST['Day4'])||isset($_POST['Day7'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor3000  WHERE Days='Day1'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
        elseif (isset($_POST['Day2'])||isset($_POST['Day5'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor3000  WHERE Days='Day2'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
          elseif (isset($_POST['Day3'])||isset($_POST['Day6'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor3000  WHERE Days='Day3'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
       

      
     }
          elseif ( in_array ($_SESSION['users']->Calories, range(3001,5000)) ){
            

           echo'  <section class="section profile">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <form method="POST">
                                <ul class="nav nav-tabs nav-tabs-bordered">
                                 
                                    <li class="nav-item ">
                                        <button class="nav-link "name="Day1" value="Day1">Day1</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" name="Day2" value="Day2">Day2</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day3" value="Day3">Day3</button>
                                    </li>
                                     <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day4" value="Day3">Day4</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day5" value="Day3">Day5</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day6" value="Day3">Day6</button>
                                    </li>
                                        <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-ex" name="Day7" value="Day7">Day7</button>
                                    </li>
                                 
                                </ul></form>
                             </div></div></div></div></section>';
      
       if (isset($_POST['Day1'])|| isset($_POST['Day4'])||isset($_POST['Day7'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor3500  WHERE Days='Day1'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
        elseif (isset($_POST['Day2'])||isset($_POST['Day5'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor3500  WHERE Days='Day2'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
          elseif (isset($_POST['Day3'])||isset($_POST['Day6'])) {
             
             require 'DB_connect.php';
            $showw=$db->prepare("SELECT * FROM   calor3500  WHERE Days='Day3'");
           $showw->execute();
                                       
         echo '<div class="meals container py-5">
             <div class="row gx-2">';
    foreach ($showw as $key ) {
             echo '

            <div class="col-md-4">
                <div class="card-col bg-secondary p-2  rounded-3  shadow-lg">
                    <div class="card-info d-flex justify-content-between">
                        <h5 class="  ">'.$key['Days'].'</h5>
                        <p class="text-light">'.$key['Timess'].'</p>
                    </div>
                    <div class="card-meal d-flex align-items-center justify-content-around ">
                        <div class="meal">
                              <img src="img_meals/'.$key['image'].'" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="meal-info">
                            <h4>'.$key['Name'].'</h4>
                            <p class="fw-bold"> <span class="text-light">'.$key['quantite'].'</span> </p>
                            <p class="fw-bold"> <span class="text-light">'.$key['Calories'].'</span> </p>

                        </div>
                    </div>
                </div>
            </div>
            ';}
            echo '</div></div>';
                                          
                                    

       }
       

                      
                       
                       
                                               
                
    }
    


          }
          else
          {
            echo "string";
          }
?>



            

        


   <?php require 'inc/Footer.php';
    ?>


</body>
</html>

 

  