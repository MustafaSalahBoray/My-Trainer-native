<?php 
 require '../DB_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
	<title></title>
</head>
<body>
  <header>
    <?php 
  require '../inc/Nav.php';

 ?>
  </header>
  <div class="container">
    <h1 class="  text-center py-2">Vegetables</h1>
        <h2 class="  text-center py-10" style="margin-bottom:50px">In this table, we have concluded for You: <span style="font-weight: bold;">Vegetables</span>, average values and nutrients per 100g</h2>
<table class="table table-dark table-hover ">
  <thead style="text-align:center;">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Protien</th>
      <th scope="col">Carbohydrate</th>
      <th scope="col">Fats</th>
      <th scope="col">Energy</th>
    </tr>
  </thead>
  <tbody style="text-align: center;background-color: white;color: white;">
    <tr>
    	<?php 
          $show=$db->prepare("SELECT * FROM green");
          $show->execute();
          foreach ($show as $key) {

    	?>
      <th scope="row"><?php echo $key['title'];?></th>
      <td class="table-striped"><?php echo $key['protein'];?></td>
      <td><?php echo $key['carbohydrate'];?></td>
      <td><?php echo $key['Fats'];?></td>
      <td><?php echo $key['energy'];?></td>
    </tr>
  <?php }?>
  </tbody>
</table></div>
<footer><?php require '../inc/Footer.php';?></footer>
</body>
</html>