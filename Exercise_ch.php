 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css?version=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



<?php
//require 'inc/Header.php';

require 'inc/Nav.php';
?>
<div class="ex">
    <div class="container vh">
        <div class="btn-scadual btn btn-danger mt-5  d-flex align-items-center justify-content-center m-auto">
            <a class="text-light fw-bold " href="Scadual.php">exercise schedule</a>
        </div>
        <div class="row align-items-center mb-5 pb-5 mt-5 pt-5">
            <div class="col-md-6">
                <div class="ex-content position-relative">
                      <h3 class=" text-center text-danger  mb-3 m-auto">Exercise GYM</h3>
                    <img src="images/Gym-structure-1080x675.jpeg" class="img-fluid rounded img-ex"  alt="">
                    <div class="middle text-center m-auto ">
                        <h5 class="text-center text-danger">DO your activety in GYM</h5>
                        <a href="http://localhost/My-Trainer%20native/Exercise.php" class="btn btn-danger w-50">GYM</a>

                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="ex-content position-relative">
                     <h3 class=" text-center text-danger  mb-3 m-auto">Exercise Home</h3>
                    <img src="images/invest.webp" class="img-fluid rounded img-ex"  alt="">
                    <div class="middle">
                        <h5 class="text-center text-danger">DO your activety in Home</h5>
                        <a href="http://localhost/My-Trainer%20native/ExerciseHome.php" class="btn btn-danger">HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require 'inc/Footer.php';
?>
</body>

</html>