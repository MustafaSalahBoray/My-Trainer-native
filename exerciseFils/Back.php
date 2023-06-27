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
    require '../inc/Nav.php';
    require '../DB_connect.php';
    $result=9;
    $numberPage=$db->prepare("SELECT * FROM back WHERE Stuts='GYM'");
    $numberPage->execute();
    $numberPage=$numberPage->rowcount(); 
    if (!isset($_GET['page'])) {
       $page=1;    }
    elseif (isset($_GET['page'])) {
     $page=$_GET['page'];
    }
     
      
    ?>
  <div class="container pt-4" style='margin-bottom: 50px; ' >
        <div class="row gy-4" >
            <?php $results=$db->prepare("SELECT * FROM back WHERE Stuts='GYM' LIMIT  " . $result . " OFFSET " .($page-1)*$result );
     $results->execute();
     foreach ($results as $key ) {?>
            <div class="col-md-4">
                <div class="ex-item d-flex justify-content-center align-items-center border-danger">
                    <div class="card" style=" width: 25rem" >
                  <img src="../exercise/<?php echo $key['image'];?>" class="card-img-top" alt="" />
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
            
                   <nav aria-label="Page navigation text-center  " id="pagination" style="margin:auto;">
  <ul class="pagination  justify-content-center"> 
         <?php  
       if ($page>1) {
   echo '   <li class="page-item"><a class=" btn btn-dark" href="Back.php?page='.($page-1).'">Previously </a></li>';}?>
     <?php  
    $TotalPage=ceil($numberPage/$result);
     for ($count=1; $count <=$TotalPage; $count++) {  
             if ($page==$count) {
   echo '  <li class="page-item"><a class=" btn btn-danger" style="color:black" href="Back.php?page='.$count.'">'.$count.'</a></li>';}
            else {   echo '  <li class="page-item"><a class="btn btn-danger" class="page-link " href="Back.php?page='.$count.'">'.$count.'</a></li>';}
    } ?>
    <?php  
       if ($count>$page) {
   echo '   <li class="page-item"><a class=" btn btn-dark" href="Back.php?page='.($page+1).'">Next</a></li>';}?>
  </ul>
</nav>   

    <?php  
   
    require '../inc/Footer.php';
    ?>
</body>

</html>



