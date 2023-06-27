<!DOCTYPE html>
<html lang="en">

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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <?php session_start();?>
</head>

<body>
    <?php
    require 'inc/Nav.php';
    ?>

    <div class="container">
        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Profile</h1>
                <!-- <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </nav> -->
            </div><!-- End Page Title -->

            <section class="section profile">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">
                                    <li class="nav-item ">
                                        <button class="nav-link active " data-bs-toggle="tab" data-bs-target="#profile-overview" name="overview">Overview</button>
                                    </li>
                                 
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                                    </li>
                                </ul>
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title text-center">Profile Details</h5>
                                          <?php 
                                                 require 'DB_connect.php';

                                                 if (isset($_SESSION['users'])) {
                                                    // echo $_SESSION['users']->Calories;
                                                 
                                          ?>


                                        <div class="card-profile text-center">
                                            <div class="card-body profile-card pt-2 d-flex flex-column align-items-center">
                                                     <?php 
                                             if ($_SESSION['users']->image=='') {
                                                      echo'<img src="images/profile.jpeg" alt="Profile">';

                                                                }
                                             else{
                                                      echo' <img src="images/'.$_SESSION['users']->image.'" alt="Profile">';
                                                                }

                                                            ?>
                                                <h2><?php echo $_SESSION['users']->Name;?></h2>
                                                <!-- <h3>Owner Of SomeWhere</h3> -->
                                            </div>
                                        </div>



                                        <div class="row d-flex text-center">
                                            <div class="col-lg-12 col-md-4 label "> Name: <span><?php echo $_SESSION['users']->Name;?></span></div>
                                        </div>

                                        <div class="row text-center">
                                            <div class="col-lg-12 col-md-4 label "> Email: <span><?php echo $_SESSION['users']->Email;?></span></div>
                                        </div>
                                        
                                        <div class="row text-center">
                                            <div class="col-lg-12 col-md-4 label ">Age: <span><?php echo $_SESSION['users']->Age;?></span></div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-lg-12 col-md-4 label ">Your Goal: <span><?php echo $_SESSION['users']->YourGoal;?></span></div>
                                        </div>

                                        <div class="row text-center">
                                            <div class="col-lg-12 col-md-4 label ">Height: <span><?php echo $_SESSION['users']->Height;?></span></div>
                                        </div>
                                          <div class="row text-center">
                                            <div class="col-lg-12 col-md-4 label ">Current Weight: <span><?php echo $_SESSION['users']->CurrentWeight;?></span></div>
                                        </div>

                                           <div class="row text-center">
                                            <div class="col-lg-12 col-md-4 label ">Goal Weight: <span><?php echo $_SESSION['users']->GoalWeight;?></span></div>
                                        </div>
                                          <div class="row text-center">
                                            <div class="col-lg-12 col-md-4 label ">Calories: <span><?php echo $_SESSION['users']->Calories;?></span></div>
                                        </div>


                                     <?php }?>
                                    </div>

                                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                        <!-- Profile Edit Form -->
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="row mb-3">

                                                <?php 
                                                      if (isset($_SESSION['users'])) {


                                                ?>
                                          

                                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                                    <h5 class="card-title text-center">Profile Image</h5>



                                                    <div class="card-profile text-center">
                                                        <div class="card-body profile-card pt-2 d-flex flex-column align-items-center">
                                                            <?php 
                                                                if ($_SESSION['users']->image=='') {
                                                                     echo'<img src="images/profile.jpeg" alt="Profile">';

                                                                }
                                                                else{
                                                                     echo' <img src="images/'.$_SESSION['users']->image.'" alt="Profile">';
                                                                }

                                                            ?>
                                                         
                                                            <div class="pt-3 mb-3">
                                                                <input type="file"  class="btn btn-primary btn-sm w-50 " name="file"><i class="bi bi-upload me-2"></i>UPLOAD</input >
                                                                <button   class="button2 mt-4 btn-primary btn-sm" title="Remove my profile image"><i class="bi bi-trash me-2"></i>DELETE</button >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mb-3">
                                                <label for="fullName" class="col-md-4 col-lg-2 col-form-label"> Name</label>
                                                <div class="col-md-8 col-lg-10">
                                                    <input name="Name" type="text" class="form-control" id="FirstName" value="<?php echo $_SESSION['users']->Name;?>"required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="fullName" class="col-md-4 col-lg-2 col-form-label">Email</label>
                                                <div class="col-md-8 col-lg-10">
                                                    <input name="Email" type="Email" class="form-control" id="LastName" value="<?php echo $_SESSION['users']->Email;?>"required>
                                                </div>
                                            </div>



                                            <div class="row mb-3">
                                                <label for="company" class="col-md-4 col-lg-2 col-form-label">Age</label>
                                                <div class="col-md-8 col-lg-10">
                                                    <input name="Age" type="text" class="form-control" id="company" value="<?php echo $_SESSION['users']->Age;?>"required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Address" class="col-md-4 col-lg-2 col-form-label">Your Goal</label>
                                                <div class="col-md-8 col-lg-10">
                                                        
                                                 <div class="form-check text-white">
                                                      <input class="form-check-input form-control  " type="radio" name="Goal" value="Gain" />
                                                      <label class="form-check-label" >
                                                        Gain wight
                                                      </label>
                                                    </div>
                                                    <div class="form-check text-white">
                                                      <input class="form-check-input form-control" type="radio" name="Goal" value="Lose"  />
                                                      <label class="form-check-label" >
                                                        Lose weight
                                                      </label>
                                                    </div> 
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Email" class="col-md-4 col-lg-2 col-form-label">Height</label>
                                                <div class="col-md-8 col-lg-10">
                                                    <input name="Height" type="text" class="form-control" id="Email" value="<?php echo $_SESSION['users']->Height;?>"required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="Email" class="col-md-4 col-lg-2 col-form-label">Active Level</label>
                                                <div class="col-md-8 col-lg-10">
                                                     <select class="form-select form-control" name="Select">
                                                         <option  value="1.2">Active</option>
                                                         <option value="1.5">Low Active</option>
                                                         <option value="1.7">Not Active</option>
                                                         
                                                     </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Email" class="col-md-4 col-lg-2 col-form-label">Current Weight</label>
                                                <div class="col-md-8 col-lg-10">
                                                    <input name="CurrentWeight" type="text" class="form-control" id="Email" value="<?php echo $_SESSION['users']->CurrentWeight;?>" required>
                                                </div>.
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Email" class="col-md-4 col-lg-2 col-form-label">Goal Weight</label>
                                                <div class="col-md-8 col-lg-10">
                                                    <input name="GoalWeight" type="text" class="form-control" id="Email" required value="<?php echo $_SESSION['users']->GoalWeight;?>">
                                                </div>
                                            </div>
                                             <div class="row mb-3">
                                       <label htmlFor="inputGroupSelect01" class="form-label  " > Choose Days   </label>
                                                <div class="col-md-8 col-lg-10">
                                                    <select class=" selectpicker w-100" multiple name="Days[]">
                                                            <option value="Saturday">Saturday</option>
                                                            <option value="Sunday">Sunday</option>
                                                            <option value="Monday">Monday</option>
                                                            <option value="Tuesday">Tuesday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                            <option value="Thursday">Thursday</option>
                                                            <option value="Friday">Friday</option>
                                                         
                                                          </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                            <label htmlFor="inputGroupSelect01" class="form-label  ">   Training system </label>
                                                <div class="col-md-8 col-lg-10">
                                                        
                                                      <select class="form-select" id="inputGroupSelect01" name="TraninngSystem">
                                                       
                                                        <option  value="muscular build">muscular build</option>
                                                        <option value="Muscle increase">Muscle increase</option>
                                                        <option value="Durability">Durability</option>
                                                        
                                                      </select>
                                                                                        </div>
                                            </div>


                                            <div class="text-center">
                                                <button type="submit" name="edit" class="btn btn-primary" value="<?php echo $_SESSION['users']->UserId ;?>">UPDATE</button>
                                            <?php }?>
                                            </div>
                                        </form><!-- End Profile Edit Form -->
                                        <?php  
                                         require 'inc/validate.php';
                                           if (isset($_POST['edit'])) {
                                              $file=$_FILES['file']['name'];
                                              $filetmp=$_FILES['file']['tmp_name'];
                                               
                                           $BMR=66+($_POST['CurrentWeight']*13.7)+($_POST['Height']*5)-($_POST['Age']*6.8);
                                            $Daily=$BMR*$_POST['Select']; 
                                            if ($_POST['Goal']=="Lose") {
                                            $Calories=$Daily- 750;
                                            $_SESSION['Calories']= $Calories;

                                            } 
                                            else{
                                                  $Calories=$Daily+ 750;
                                            $_SESSION['Calories']= $Calories;
                                            }
                                                  $Days=implode(',',$_POST['Days']);    
                 $Update=$db->prepare(" UPDATE users SET Name=:Name , Email=:Email , Age=:Age , ActiveLevel=:Active, YourGoal=:YourGoal ,Height=:Height , CurrentWeight=:CurrentWeight , GoalWeight=:GoalWeight ,Calories=:Calories , image=:image,TraninngSystem=:TraninngSystem,ChooseDays=:ChooseDays WHERE UserId =:id ");
        $Update->bindparam("Name",$_POST['Name']);
        $Update->bindparam("Email",$_POST['Email']);
        
        $Update->bindparam("Age",$_POST['Age']);
        $Update->bindparam("Active",$_POST['Select']);
        $Update->bindparam("YourGoal",$_POST['Goal']);
        $Update->bindparam("Height",$_POST['Height']);
        $Update->bindparam("CurrentWeight",$_POST['CurrentWeight']);
        $Update->bindparam("GoalWeight",$_POST['GoalWeight']);
        $Update->bindparam("Calories",$Calories);
        $Update->bindparam("image",$file);
        $Update->bindparam("TraninngSystem",$_POST['TraninngSystem']);
         $Update->bindparam("ChooseDays",$Days);
          $Update->bindparam("id",$_POST['edit']);

             if ($Update->execute()) { 
             echo "<script>alert('Done UPDATE DATA ^_^') </script>";
             move_uploaded_file($filetmp,"images/$file");
              echo "<script> window.open('http://localhost/My-Trainer%20native/Login.php','_self')</script>";  
                       
        }
      else{
         echo "<script>alert('Found Erorr -_-') </script>";
      } 

      }     ?>

                                    </div>

                                    <div class="tab-pane fade pt-3" id="profile-change-password">
                                        <!-- Change Password Form -->
                                        <form method="POST">

                                            <div class="row mb-3">
                                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password" type="password" class="form-control" id="currentPassword">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input min="8" name="newpassword" type="password" class="form-control" id="newPassword">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input min="8" name="renewpassword" type="password" class="form-control" id="renewPassword">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" name="Change" class="btn btn-primary">Change Password</button>
                                            </div>
                                        </form><!-- End Change Password Form -->

                                    </div>
                                         <?php 
                                         if (isset($_POST['Change'])) {
                                                if (isset($_SESSION['users'])) {
                                                    $id=$_SESSION['users']->UserId;
                                              if ($_POST['password']==$_SESSION['users']->password) {
                                                 if ($_POST['newpassword']==$_POST['renewpassword'])
                                                  { 
                                                   $UpdatePass=$db->prepare(" UPDATE users SET password=:password WHERE UserId='$id' ");
                                                   $UpdatePass->bindparam("password",$_POST['newpassword']);
                                                   if ($UpdatePass->execute()) {
                                                     echo "<script>alert('Successful Password Is Change ^_^') </script>";
                                                    } 
                                                    

                                                 }
                                                 else
                                                 {
                                                  echo "<script>alert('Re-enter New Password or New Password Is Wrong -_-') </script>";
                                                 }

                                              }
                                              else
                                              {
                                                    echo "<script>alert('Current password is Wrong -_-') </script>"; 
                                              }
                                         }
                                            }
                                         ?>
                                </div><!-- End Bordered Tabs -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main><!-- End #main -->
    </div>

    <?php
    require 'inc/Footer.php';
    ?>
    <!-- Vendor JS Files -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>