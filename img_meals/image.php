<?php   
 
  $username="root";
  $pass="";
  $db=new PDO("mysql:host=Localhost;dbname=db_my_trainer;Charset=utf8;",$username,$pass); 

 if (isset($_POST['submit'])) {
   $typeFile1=$_FILES['file1']['name'];
   $file1=$_FILES['file1']['tmp_name'];
      $typeFile2=$_FILES['file2']['name'];
   $file2=$_FILES['file2']['tmp_name'];
      $typeFile3=$_FILES['file3']['name'];
   $file3=$_FILES['file3']['tmp_name'];
      $typeFile4=$_FILES['file4']['name'];
   $file4=$_FILES['file4']['tmp_name']; 


  
   $upd=$db->prepare("INSERT INTO  calories1300 (image1 ,quan1 ,calo1 ,image2 , quan2 ,calo2, image3  ,quan3 ,calo3,image4 ,quan4 ,calo4 ,timep, Days, Type1, Type2, Type3 ,Type4) VALUES (:image1 ,:quan1 ,:calo1 ,:image2 , :quan2 ,:calo2, :image3  ,:quan3 ,:calo3,:image4 ,:quan4 ,:calo4 ,:timep, :Days, :Type1, :Type2, :Type3 ,:Type4)");
   $upd->bindparam(":image1",$typeFile1);
   $upd->bindparam(":quan1",$_POST['titl1']);
   $upd->bindparam(":calo1",$_POST['titlg']);

   $upd->bindparam(":image2",$typeFile2);
   $upd->bindparam(":quan2",$_POST['titl2']);
   $upd->bindparam(":calo2",$_POST['titl2e']);

   $upd->bindparam(":image3",$typeFile3);
   $upd->bindparam(":quan3",$_POST['titl3']);
   $upd->bindparam(":calo3",$_POST['titl3f']);
  $upd->bindparam(":image4",$typeFile4);
   $upd->bindparam(":quan4",$_POST['titl32']);
  $upd->bindparam(":calo4",$_POST['titl3fe']);
         $upd->bindparam(":timep",$_POST['titl5']);
        $upd->bindparam(":Days",$_POST['titl6']);
       $upd->bindparam(":Type1",$_POST['titl7']);
          $upd->bindparam(":Type2",$_POST['titl8']);
           $upd->bindparam(":Type3",$_POST['titl9']);

      $upd->bindparam(":Type4",$_POST['titl9e']);
 

         
   if ($upd->execute()) {
      move_uploaded_file($file1,$typeFile1);
       move_uploaded_file($file2,$typeFile2);
         move_uploaded_file($file3,$typeFile3);
          move_uploaded_file($file4,$typeFile4);
   }
   else{
      echo "no";
   }
 }

?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/meals.css">
    <?php  session_start();?>

<!-- <form method="POST" enctype="multipart/form-data">
   <input type="file" name="file1"  ><br>
   <input type="text" name="titl1" ><br>
     <input type="text" name="titlg" ><br>
     <input type="text" name="titl7" ><br>type1
        <input type="file" name="file2" ><br>
   <input type="text" name="titl2" ><br>
     <input type="text" name="titl2e" ><br>
     <input type="text" name="titl8" ><br>type2
          <input type="file" name="file3" ><br>
   <input type="text" name="titl3" ><br>
     <input type="text" name="titl3f" ><br>
      <input type="text" name="titl9" ><br>type3
      <input type="file" name="file4" ><br>
   <input type="text" name="titl32" ><br>
     <input type="text" name="titl3fe" ><br>
      <input type="text" name="titl9e" ><br>type4
      
     <input type="text" name="titl5" ><br>
     <input type="text" name="titl6" ><br>
      
   
   <button type="submit" name="submit" >submit</button>
</form> -->
<?php 

    require '../inc/Nav.php';  

 
 if (isset($_SESSION['users'])) {
      
    if ($_SESSION['users']->Calories <= 1300){


             $showw=$db->prepare("SELECT * FROM   calories1300 ");
   $showw->execute();
   foreach ($showw as $key ) {
    echo '<div class="meals container py-5">
        <div class="row">
            <h1 class="text-danger text-center">'.$key['Days'].'</h1>
                   <div class="row">
            <div class=" py-2 my-2 bg-secondary rounded-2 shadow-lg">
                <h4 class="fw-bold">'.$key['timep'].'</h4>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                  <img src="../img_meals/'.$key['image1'].'" class="img-fluid rounded-circle" alt="">                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type1'].'</h3>
                                <h4>'.$key['quan1'].'</h4>
                                 <h4>'.$key['calo1'].'</h4>
                            </div>
                        </div>
                        <!-- seconed -->
                            <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image2'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type2'].'</h3>
                                <h4>'.$key['quan2'].'</h4>
                                 <h4>'.$key['calo2'].'</h4>
                            </div>
                        </div>
                       
                                               
                    </div>
                </div>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image3'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type3'].'</h3>
                                <h4>'.$key['quan3'].'</h4>
                                 <h4>'.$key['calo3'].'</h4>
                            </div>
                        </div>
                        
                          
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image4'].'" class="img-fluid rounded-circle " alt="" style="text-danger">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type4'].'</h3>
                                <h4> '.$key['quan4'].'</h4>
                                 <h4>'.$key['calo4'].'</h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>';}

    }
   
   elseif ( in_array ($_SESSION['users']->Calories, range(1301,1600)) ){
           $showw=$db->prepare("SELECT * FROM   calories1600");
   $showw->execute();
   foreach ($showw as $key ) {
       echo '<div class="meals container py-5">
        <div class="row">
            <h1 class="text-danger text-center">'.$key['Days'].'</h1>
                   <div class="row">
            <div class=" py-2 my-2 bg-secondary rounded-2 shadow-lg">
                <h4 class="fw-bold">'.$key['timep'].'</h4>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                  <img src="img_meals/'.$key['image1'].'" class="img-fluid rounded-circle" alt="">                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type1'].'</h3>
                                <h4>'.$key['quan1'].'</h4>
                                 <h4>'.$key['calo1'].'</h4>
                            </div>
                        </div>
                        <!-- seconed -->
                            <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image2'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type2'].'</h3>
                                <h4>'.$key['quan2'].'</h4>
                                 <h4>'.$key['calo2'].'</h4>
                            </div>
                        </div>
                       
                                               
                    </div>
                </div>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image3'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type3'].'</h3>
                                <h4>'.$key['quan3'].'</h4>
                                 <h4>'.$key['calo3'].'</h4>
                            </div>
                        </div>
                        
                          
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image4'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type4'].'</h3>
                                <h4> '.$key['quan4'].'</h4>
                                 <h4>'.$key['calo4'].'</h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>';
   }}
    elseif ( in_array ($_SESSION['users']->Calories, range(1601,1700)) ){

             $sec=$db->prepare("SELECT * FROM  calories1700");
   $sec->execute();
   foreach ($sec as $key ) {
       echo '<div class="meals container py-5">
        <div class="row">
            <h1 class="text-danger text-center">'.$key['Days'].'</h1>
                   <div class="row">
            <div class=" py-2 my-2 bg-secondary rounded-2 shadow-lg">
                <h4 class="fw-bold">'.$key['timep'].'</h4>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                  <img src="img_meals/'.$key['image1'].'" class="img-fluid rounded-circle" alt="">                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type1'].'</h3>
                                <h4>'.$key['quan1'].'</h4>
                                 <h4>'.$key['calo1'].'</h4>
                            </div>
                        </div>
                        <!-- seconed -->
                            <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image2'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type2'].'</h3>
                                <h4>'.$key['quan2'].'</h4>
                                 <h4>'.$key['calo2'].'</h4>
                            </div>
                        </div>
                       
                                               
                    </div>
                </div>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image3'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type3'].'</h3>
                                <h4>'.$key['quan3'].'</h4>
                                 <h4>'.$key['calo3'].'</h4>
                            </div>
                        </div>
                        
                          
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image4'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type4'].'</h3>
                                <h4> '.$key['quan4'].'</h4>
                                 <h4>'.$key['calo4'].'</h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>';}
    }
    elseif ( in_array ($_SESSION['users']->Calories, range(1701,2500)) ){

             $showw=$db->prepare("SELECT * FROM   calories2500");
   $showw->execute();
   foreach ($showw as $key ) {
       echo '<div class="meals container py-5">
        <div class="row">
            <h1 class="text-danger text-center">'.$key['Days'].'</h1>
                   <div class="row">
            <div class=" py-2 my-2 bg-secondary rounded-2 shadow-lg">
                <h4 class="fw-bold">'.$key['timep'].'</h4>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                  <img src="img_meals/'.$key['image1'].'" class="img-fluid rounded-circle" alt="">                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type1'].'</h3>
                                <h4>'.$key['quan1'].'</h4>
                                 <h4>'.$key['calo1'].'</h4>
                            </div>
                        </div>
                        <!-- seconed -->
                            <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image2'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type2'].'</h3>
                                <h4>'.$key['quan2'].'</h4>
                                 <h4>'.$key['calo2'].'</h4>
                            </div>
                        </div>
                       
                                               
                    </div>
                </div>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image3'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type3'].'</h3>
                                <h4>'.$key['quan3'].'</h4>
                                 <h4>'.$key['calo3'].'</h4>
                            </div>
                        </div>
                        
                          
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image4'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type4'].'</h3>
                                <h4> '.$key['quan4'].'</h4>
                                 <h4>'.$key['calo4'].'</h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>';}
    }
     elseif ( in_array ($_SESSION['users']->Calories, range(2501,3000)) ){
        $show=$db->prepare("SELECT * FROM  calories3000");
    $show->execute();
    foreach ($show as $key ) {
             echo ' <div class="meals container py-5">
        <div class="row">
            <h1 class="text-danger text-center">'.$key['Days'].'</h1>
                   <div class="row">
            <div class=" py-2 my-2 bg-secondary rounded-2 shadow-lg">
                <h4 class="fw-bold">'.$key['Timep'].'</h4>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image1'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type1'].'</h3>
                                <h4>'.$key['quan1'].'</h4>
                                 <h4>'.$key['calo1'].'</h4>
                            </div>
                        </div>
                
                            <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image2'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type2'].'</h3>
                                  <h4>'.$key['quan2'].'</h4>
                                  <h4>'.$key['calo2'].'</h4>

                            </div>
                        </div>
                       
                                               
                    </div>
                </div>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['image3'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['Type3'].'</h3>
                                 <h4>'.$key['quan3'].'</h4>
                                  <h4>'.$key['calo3'].'</h4>
                            </div>
                        </div>
                        
                          
                        
                       
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> 
';}
     }
          elseif ( in_array ($_SESSION['users']->Calories, range(3001,5000)) ){
             $select=$db->prepare("SELECT * FROM  calories3500");
   $select->execute();
   foreach ($select as $key ) {
       echo '<div class="meals container py-5">
        <div class="row">
            <h1 class="text-danger text-center">'.$key['Days'].'</h1>
                   <div class="row">
            <div class=" py-2 my-2 bg-secondary rounded-2 shadow-lg">
                <h4 class="fw-bold">'.$key['timep'].'</h4>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                  <img src="img_meals/'.$key['image1'].'" class="img-fluid rounded-circle" alt="">                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['type1'].'</h3>
                                <h4>'.$key['quan1'].'</h4>
                                 <h4>'.$key['calo1'].'</h4>
                            </div>
                        </div>
                        <!-- seconed -->
                            <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['Image2'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['type2'].'</h3>
                                <h4>'.$key['quan2'].'</h4>
                                 <h4>'.$key['calo2'].'</h4>
                            </div>
                        </div>
                       
                                               
                    </div>
                </div>
                <div class="col-lg-12  ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['Image3'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['type3'].'</h3>
                                <h4>'.$key['quan3'].'</h4>
                                 <h4>'.$key['calo3'].'</h4>
                            </div>
                        </div>
                        
                          
                        <div class="col-md-3">
                            <div class="meal">
                                <img src="img_meals/'.$key['Image4'].'" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe-name">
                                <h3 class="text-light">'.$key['type4'].'</h3>
                                <h4> '.$key['quan4'].'</h4>
                                 <h4>'.$key['calo4'].'</h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>';}
    


          }}
?>



            

        


   <?php require '../inc/Footer.php';
    ?>
