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
<h1 align="center">edit user</h1>
	<div class="reg">
	<?php
	        include("dbconfig.php");
                            $student_id = mysqli_real_escape_string($db,$_SESSION['use'] );
                            $query = "SELECT * FROM user WHERE username='$student_id' ";
                            $query_run = mysqli_query($db, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
	<form method="POST" action="dashbor.php" enctype="multipart/form-data">
    <label>user name</label>
	<input type="text" name="username" value="<?=$student['username'];?>"><br>
	<label>user email</label>
	<input type="text" name="useremail" value="<?=$student['useremail'];?>"><br>
	<label>user password</label>
	<input type="password" name="userpass" value="<?=$student['userpass'];?>"><br>
	<label>user address</label>
	<input type="text" name="useraddress" value="<?=$student['useraddress'];?>"><br>
	<label>user bid</label>
	<input type="text" name="userbid" value="<?=$student['userbid'];?>"><br>
	<label>user position</label>
	<input type="text" name="userposition" value="<?=$student['userposition'];?>"><br>
	<label>user contact</label>
	<input type="text" name="usercontact" value="<?=$student['usercontact'];?>"><br>
	<label>user job</label>
	<input type="text" name="userjob" value="<?=$student['userjob'];?>"><br>
	<label>user role</label>
	<input type="textarea" name="userrole" value="<?=$student['userrole'];?>"><br>
	<label>image</label>
	<input type="file" name="image" ><br>
	<input name="update_user" id= "sub"  type="submit" value="EDIT">
	</div>
	</div>
</form>
<?php  
include("inc/footer.php");
?>
</body>
</html>
<?php }?>