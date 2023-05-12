<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<title>Document</title>
</head>

<?php 
       include("dbconfig.php");
	     //check database connect or not  
 $query="select * from regbirth";  
 $connect=mysqli_query($db,$query);  
 $num1=mysqli_num_rows($connect); //check in database any data have or not
 $query="SELECT * FROM regmarriage WHERE divorced='passive' "; 
 $connect=mysqli_query($db,$query);  
 $num2=mysqli_num_rows($connect); //check in database any data have or not
 $query="SELECT * FROM regmarriage WHERE divorced='active' ";   
 $connect=mysqli_query($db,$query);  
 $num3=mysqli_num_rows($connect); //check in database any data have or not
 $query="select * from regdeath";  
 $connect=mysqli_query($db,$query);  
 $num4=mysqli_num_rows($connect); //check in database any data have or not
 ?>
<body>
<header class="header">
<div class="header-1">
<form action="dashbor.php "  class="search-form" method="GET">
              <input
                type="search"
                name="search"
                placeholder="search here..."
                id="search-box"
              />
              <label for="search-box"   type="submit"  class="fas fa-search">search</label>
            </form>
</div>
</header>
     <div class="dash">
	      <div class="board">
		       <div class="dashs">
			       <div class="box">
				      <h1><?php echo $num1?></h1>
					  <h3>birth</h3>
				   </div>
				   <div class="icoo">
				        <img src="img/sleepbaby.jpg" alt="">
				   </div>
			   </div>
			   <div class="dashs">
			       <div class="box">
				      <h1><?php echo $num2?></h1>
					  <h3>divorce</h3>
				   </div>
				   <div class="icoo">
				        <img src="img\divorce-icon-260nw-708907414.webp" alt="">
				   </div>
			   </div>
			   <div class="dashs">
			       <div class="box">
				      <h1><?php echo $num3?></h1>
					  <h3>marriage</h3>
				   </div>
				   <div class="icoo">
				        <img src="img\two-bonded-wedding-rings-marriage-260nw-520275307.webp" alt="">
				   </div>
			   </div>
			   <div class="dashs">
			       <div class="box">
				      <h1><?php echo $num4?></h1>
					  <h3>death</h3>
				   </div>
				   <div class="icoo">
				        <img src="img\tombstone-line-icon-outline-vector-260nw-714354922.webp" alt="">
				   </div>
			   </div>
			</div>
		</div>
			</body>
			</html>
	 