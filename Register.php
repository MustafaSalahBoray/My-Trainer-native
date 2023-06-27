<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
" rel="stylesheet">
  <title>MY-TRAINER</title>
  <?php  session_start();?>
</head>

<body>
  <header>
    <?php
    require 'inc/Nav2.php';
    ?>
  </header>
  <div class="layer">
    <div class="container w-50 py-5 position-relative">
      <form method="POST" id="Login" enctype="multipart/form-data" >
        <div class="mb-3">
          <label htmlFor="exampleInputName" class="form-label text-danger outline-dander">
            Name
          </label>
          <input  required type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name="Name" />
        </div>
        <div class="mb-3">
          <label htmlFor="exampleInputEmail1" class="form-label text-danger outline-dander">
            Email address
          </label>
          <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="Email" />
        </div>
        <div class="mb-3">
          <label htmlFor="exampleInputPassword1" class="form-label text-danger outline-dander">
            password
          </label>
          <input type="password" required class="form-control" id="exampleInputPassword1"  minlength="8"aria-describedby="emailHelp" name="password" />
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <label htmlFor="exampleInputFat" class="form-label text-danger ">
                 Age
              </label>
              <input required type="taxt" class="form-control " id="exampleInputFat" name="Age" />
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <label htmlFor="inputGroupSelect01" class="form-label text-danger ">
                Active Level
              </label>
              <select required  class="form-select" id="inputGroupSelect01" name="Select">
                <option  value="1.2">Active</option>
                <option value="1.5">Low Active</option>
                <option value="1.7">Not Active</option>
                
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <label htmlFor="exampleInputPassword1" class="form-label text-danger ">
                Your goal
              </label>
              <div class="check d-flex justify-content-around"> 
                 
             <div class="form-check text-white">
                  <input required class="form-check-input " type="radio" name="Goal" value="Gain" />
                  <label class="form-check-label" >
                    Gain wight
                  </label>
                </div>
                <div class="form-check text-white">
                  <input required class="form-check-input" type="radio" name="Goal" value="Lose"  />
                  <label class="form-check-label">
                    Lose weight
                  </label>
                </div> 
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <label htmlFor="exampleInputPassword1" class="form-label text-danger ">
                Height
              </label>
              <input required type="number" class="form-control " id="exampleInputPassword1" name="Haight" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <label htmlFor="exampleInputPassword1" class="form-label text-danger ">
                Current Weight
              </label>
              <input required type="number" class="form-control " id="exampleInputPassword1"  name="Current" />
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <label htmlFor="exampleInputPassword1" class="form-label text-danger ">
                Goal Weight
              </label>
              <input required  type="number" class="form-control " id="exampleInputPassword1" name="GoalW" />
            </div>
          </div>
        </div>
         <div class="row">
           <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <label htmlFor="inputGroupSelect01" class="form-label text-danger ">
               Training system
              </label>
              <select required class="form-select" id="inputGroupSelect01" name="TraninngSystem">
               
                <option  value="muscular build">muscular build</option>
                <option value="Muscle increase">Muscle increase</option>
                <option value="Durability">Durability</option>
                
              </select>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <label htmlFor="inputGroupSelect01" class="form-label text-danger ">
                Choose Days
              </label>
             <select required class=" selectpicker w-100" multiple name="Days[]">
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
        </div>
        <div class="w-100 text-center">
          <button type="submit" class="btn btn-danger w-50 mt-2" name="submit">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <?php
 // require 'inc/Footer.php';
  ?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
<?php
        require 'DB_connect.php'; 
        require 'inc/validate.php'; 
       

                if (isset($_POST['submit'])) {
                  
         $Email=$_POST['Email'];
       
        $image='profile.jpeg';
        $BMR=66+($_POST['Current']*13.7)+($_POST['Haight']*5)-($_POST['Age']*6.8);
        $Daily=$BMR*$_POST['Select']; 
        if ($_POST['Goal']=="Lose") {
        $Calories=$Daily- 500;
        $_SESSION['Calories']= $Calories;

        } 
        else{
              $Calories=$Daily+ 500;
        $_SESSION['Calories']= $Calories;
        }  
          $Days=implode(',',$_POST['Days']);

          if (ValidateEmail($Email)) {
        $Insert=$db->prepare("INSERT INTO users (Name,Email,password,Age,ActiveLevel,YourGoal,Height,CurrentWeight,GoalWeight,Calories,image,TraninngSystem,ChooseDays) VALUES(:Name,:Email,:password,:Age,:Active,:YourGoal,:Height,:CurrentWeight,:GoalWeight,:Calories,:image,:TraninngSystem,:ChooseDays)");
        $Insert->bindparam("Name",$_POST['Name']);
        $Insert->bindparam("Email",$_POST['Email']);
        $Insert->bindparam("password",$_POST['password']);
        $Insert->bindparam("Age",$_POST['Age']);
        $Insert->bindparam("Active",$_POST['Select']);
        $Insert->bindparam("YourGoal",$_POST['Goal']);
        $Insert->bindparam("Height",$_POST['Haight']);
        $Insert->bindparam("CurrentWeight",$_POST['Current']);
        $Insert->bindparam("GoalWeight",$_POST['GoalW']);
        $Insert->bindparam("Calories",$Calories);
        $Insert->bindparam("image",$image);
       $Insert->bindparam("TraninngSystem",$_POST['TraninngSystem']);
         $Insert->bindparam("ChooseDays",$Days);

             if ($Insert->execute()) { 
             echo "<script>Swal.fire(
  ' Success',
  ' Congratulations, your account has been successfully created.',
  'success'
) </script>";
               echo "<script> window.open('http://localhost/My-Trainer%20native/Login.php','_self')</script>";          
        }
      else{
         echo "<script>alert('Found Erorr -_-') </script>";
      } 
      }
      else{
         echo "<script>alert('Pleaze Correct Email  ^_^') </script>";
      } 
       }
 
      
 
?>