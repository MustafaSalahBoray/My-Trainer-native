<?php
   
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods:POST");
   require 'DB_connect.php';
 if(isset($_POST['Name']))
{
	$Name=$_POST['Name'];
}
 else return;
  if(isset($_POST['Email']))
{
	$Email=$_POST['Email'];
}
 else return;

 if(isset($_POST['password']))
{
	$password=$_POST['password'];
}
 else return;

 if(isset($_POST['Age']))
{
	$Age=$_POST['Age'];
}
 else return;

 if(isset($_POST['Select']))
{
	$Select=$_POST['Select'];
}
 else return;
 if(isset($_POST['Goal']))
{
	$Goal=$_POST['Goal'];
}
 else return;

 if(isset($_POST['Haight']))
{
	$Haight=$_POST['Haight'];
}
 else return;

 if(isset($_POST['Current']))
{
	$Current=$_POST['Current'];
}
 else return;

 if(isset($_POST['GoalW']))
{
	$GoalW=$_POST['GoalW'];
}
 else return;

if(isset($_POST['Calories']))
{
  $Calories=$_POST['Calories'];
}
 else return;

  if(isset($_POST['image']))
{
  $image=$_POST['image'];
}
 else return;
   $arr=[];
     $Insert=$db->prepare("INSERT INTO users (Name,Email,password,Age,ActiveLevel,YourGoal,Height,CurrentWeight,GoalWeight,Calories,image) VALUES(:Name,:Email,:password,:Age,:Active,:YourGoal,:Height,:CurrentWeight,:GoalWeight,:Calories,:image)");
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
    
       
         if ($Insert->execute()) {
         	$arr['sucess']="Success";

         }
         else{
         	$arr['sucess']="Failed";
         }
         print_r(json_encode($arr));





?>