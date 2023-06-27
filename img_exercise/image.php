<?php   


$username="mostafa";
$pass="123";
$db=new PDO("mysql:host=Localhost;dbname=my_trainer;Charset=utf8;",$username,$pass); 
 
 if (isset($_POST['submit'])) {
   $typeFile=$_FILES['file']['name'];
   $file=$_FILES['file']['tmp_name'];
  
   $upd=$db->prepare("INSERT INTO triceps (image,titel) VALUES (:image,:titel)");
   $upd->bindparam(":image",$typeFile);
   $upd->bindparam(":titel",$_POST['titl']);
   if ($upd->execute()) {
      move_uploaded_file($file,$typeFile);
   }
 }

?>
<form method="POST" enctype="multipart/form-data">
   <input type="file" name="file" >
   <input type="text" name="titl" >
   <button type="submit" name="submit" >submit</button>
</form>

 <?php 
 $show=$db->prepare("SELECT * FROM chest");
 $show->execute();
 foreach ($show as $key ) {
 echo '<img src="img_exercise/'.$key['image'].'">';
  echo'<p>'.$key['titel'] .'</p>';
 }

?>