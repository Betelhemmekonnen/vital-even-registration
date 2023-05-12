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
<h1 align="center">edit death</h1>
	<div class="reg">
	<?php
	        include("../dbconfig.php");
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($db, $_GET['id']);
                            $query = "SELECT * FROM regdeath WHERE did='$student_id' ";
                            $query_run = mysqli_query($db, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
	<form method="POST" action="../dashbor.php" enctype="multipart/form-data">
    <label>name</label>
	<input type="text" name="name"  value="<?=$student['title'];?>"><br>
	<label>d_cause</label>
	<input type="text" name="d_cause"  value="<?=$student['d_cause'];?>"><br>
	<label>date of birth</label>
	<input type="date" name="date"  value="<?=$student['dob'];?>"><br>
	<label>DID</label>
	<input type="text" name="did"  value="<?=$student['did'];?>"><br>
	<label>region</plabel>
	<input type="text" name="region"  value="<?=$student['region'];?>"><br>
	<label for="cover"> <img id=blah src="../img/add-image.png" width="52" > <br/> Add user photo(s) </label>
    <input hidden id="cover" type=file name="file" accept="*.jpg">
	<input name="update_death" id= "sub"  type="submit" value="Submit">
	</div>
	</div>
</form>
<?php  
		}}
include("../inc/footer.php");
?>
</body>
</html>
