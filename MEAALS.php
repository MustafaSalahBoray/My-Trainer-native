<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Profile</title>
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/profileStyle.css" rel="stylesheet">
    <link href='assets/css/style.css?version=1' rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">   
   <title>MY-Trainer</title>
   <section class="section profile">
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
                                 
                                 
                                </ul></form>
                             </div></div></div></div></section>
      <?php 
       if (isset($_POST['Day1'])) {
             
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
        elseif (isset($_POST['Day2'])) {
             
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
          elseif (isset($_POST['Day3'])) {
             
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
       

      ?>
                  
