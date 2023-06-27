<?php
   
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods:POST");
   require 'DB_connect.php';
 if(isset($_POST['password']))
{
	$password=$_POST['password'];
}
 else return;
  if(isset($_POST['Email']))
{
	$Email=$_POST['Email'];
}
 else return;

   $arr=[];
     $Insert=$db->prepare(" SELECT * FROM  users WHERE  Email=:Email AND password=:password");
      
        $Insert->bindparam("Email",$_POST['Email']);
        $Insert->bindparam("password",$_POST['password']);
        $Insert->execute();

       
         if ($Insert->rowcount()==1) {
         	$arr['sucess']="Success";

         }
         else{
         	$arr['sucess']="Failed";
         }
         print_r(json_encode($arr));





?>