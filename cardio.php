<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>MY-Trainer</title>
</head>

<body>
   <?php
    require 'inc/Nav.php';
    require 'DB_connect.php';
   
    ?>
  <div class="container pt-4" style='margin-bottom: 50px; ' >
        <div class="row gy-4">
            <?php $results=$db->prepare("SELECT * FROM cardio " );
     $results->execute();
     foreach ($results as $key ) {?>
            <div class="col-md-4">
                <div class="ex-item d-flex justify-content-center align-items-center border-danger">
                    <div class="card" style=" width: 25rem" >
                      <img src="img_exercise/<?php echo $key['image'];?>" class="card-img-top" alt="" />
                        <div class="card-body">
                              
                            <p class="card-text">
                              <?php echo $key['titel'];?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>

    </div>
       
     

    <?php  
  
    require 'inc/Footer.php';
    ?>
</body>

</html>



