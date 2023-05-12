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
<h1 align="center">edit birth</h1>
	<div class="reg">
	<?php
	        include("../dbconfig.php");
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($db, $_GET['id']);
                            $query = "SELECT * FROM regbirth WHERE bid='$student_id' ";
                            $query_run = mysqli_query($db, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
	<form method="POST" action="../dashbor.php" enctype="multipart/form-data">
	<label>bid</label>
	<input type="text" name="bid" value="<?=$student['bid'];?>" ><br>
    <label>name</label>
	<input type="text" name="name" value="<?=$student['name'];?>" ><br>
	<label>father name</label>
	<input type="text" name="gfname" value="<?=$student['fname'];?>" ><br>
	<label>date of birth</label>
	<input type="date" name="date" value="<?=$student['dob'];?>" ><br>
	<label>place of birth</label>
	<input type="text" name="place" value="<?=$student['pob'];?>" ><br>
	<label>nationality</label>
	<input type="text" name="nation" value="<?=$student['nationality'];?>" ><br>
	<label>father full name</label>
	<input type="text" name="ffname" value="<?=$student['ffullname'];?>" ><br>
	<label>fatherbid</label>
	<input type="text" name="fbid" value="<?=$student['father_bid'];?>" ><br>
	<label>mother full name</label>
	<input type="text" name="mfname" value="<?=$student['mfullname'];?>" ><br>
	<label>mother bid</label>
	<input type="text" name="mbid" value="<?=$student['mother_bid'];?>" ><br>
	<label for="cover"> <img id=blah src="../img/add-image.png" width="52" > <br/> Add user photo(s) </label>
    <input hidden id="cover" type=file name="file" accept="*.jpg">
	<input name="update_birth" id= "sub"  type="submit" value="Submit">
	</div>
	</div>
</form>
<?php  
		}}
include("../inc/footer.php");
?>
</body>
</html>