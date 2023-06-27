<?php
   
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods:POST");
   require 'DB_connect.php';
 if(isset($_POST['to_user_id']))
{
	$to_user_id=$_POST['to_user_id'];
}
 else return;
  if(isset($_POST['from_user_id']))
{
	$from_user_id=$_POST['from_user_id'];
}
 else return;

 if(isset($_POST['message']))
{
	$message=$_POST['message'];
}
 else return;
 $timestamp=date('Y-m-d h:i:s');

   $arr=[];
  $InsertMessage=$db->prepare("INSERT INTO chat_message (to_user_id,from_user_id,chat_message,timestamp) VALUES (:to_user_id,:from_user_id,:chat_message,:timestamp)");
        $InsertMessage->bindparam("to_user_id",$_POST['to_user_id']);
         $InsertMessage->bindparam("from_user_id",$_POST['from_user_id']);
        $InsertMessage->bindparam("chat_message",$_POST['message']);  
         $InsertMessage->bindparam("timestamp",$timestamp);
             
         if ($InsertMessage->execute()) {
         	$arr['sucess']="Success";

         }
         else{
         	$arr['sucess']="Failed";
         }
         print_r(json_encode($arr));





?>