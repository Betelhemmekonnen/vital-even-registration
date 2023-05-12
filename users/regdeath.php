<?php
session_start( );
 if((!isset($_SESSION['im']))){
   header('location:login.php');
 }
    if(isset($_POST['regdeath']))
    {
		include("../dbconfig.php");
        $dod=$_POST['dod'];
        $title=$_POST['name'];
        $d_cause=$_POST['d_cause'];
        $region=$_POST['region'];
        $zone=$_POST['zone'];
        $woreda=$_POST['woreda'];
        $d_o_dr=date("Y/m/d");
		$regname= $_SESSION['use'];
        $insert="INSERT INTO regdeath(title,dod,d_o_dr,registrar_full_name,d_cause,region,zone,woreda)
		VALUES ('$title','$dod','$d_o_dr','$regname','$d_cause','$region','$zone','$woreda')";
        $run_rec=mysqli_query($db,$insert);
        echo mysqli_error($db);
        if($run_rec)
        {
            echo "register successfuly";
            
        }
        else
        echo mysqli_error($db);
    
    } 
        ?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="../css/style.css">
	<title>Document</title>
</head>
<body>
<div class="login">
<a id="add" href="dashbor.php">to main body</a>
<h1 align="center">register death</h1>
	<div class="reg">
  <form  id="bb" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <label>name</label>
	<input type="text" name="name"><br>
	<label>d_bid</label>
	<input type="text" name="fname"><br>
	<label>dod</label>
	<input type="text" name="dod"><br>
	<label>sex</label>
	<select type="text" name="sex">
	<option>select sex</option>
	<option>male</option>
	<option> female </option>
	</select><br>
	<label>date of birth</label>
	<input type="date" name="dat"><br>
	<label>d_cause</label>
	<input type="text" name="d_cause"><br>
	<label>region</label>
	<input type="text" name="region"><br>
	<label>zone</label>
	<input type="text" name="zone"><br>
	<label>woreda</label>
	<input type="text" name="woreda"><br>

	<input name="regdeath" id= "sub"  type="submit" value="Submit">
	</div>
	</div>
</form>
</body>
</html>
