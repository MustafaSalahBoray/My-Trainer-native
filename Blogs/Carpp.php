<?php 

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET");
	 $username="mostafa";
	  $pass="123";
	  $db=new PDO("mysql:host=Localhost;dbname=my_trainer;Charset=utf8;",$username,$pass); 
	  $show=$db->prepare("SELECT * FROM  carp");
	  $show->execute();
	 $show= $show->fetchAll(PDO::FETCH_ASSOC);
       print_r(json_encode($show));

?>