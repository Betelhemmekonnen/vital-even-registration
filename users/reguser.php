
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
<h1 align="center">user register</h1>
	<div class="reg">
	<form method="POST" action="users/uploadbooks.php" enctype="multipart/form-data">
    <label>user name</label>
	<input type="text" name="name"><br>
	<label>user email</label>
	<input type="text" name="fname"><br>
	<label>user password</label>
	<input type="password" name="gfname"><br>
	<label>user address</label>
	<input type="text" name="date"><br>
	<label>user bid</label>
	<input type="text" name="place"><br>
	<label>user position</label>
	<input type="text" name="region"><br>
	<label>user contact</label>
	<input type="text" name="zone"><br>
	<label>user job</label>
	<input type="text" name="woreda"><br>
	<label>user role</label>
	<input type="textarea" name="role"><br>
	<label for="cover"> <img id=blah src="img/add-image.png" width="52" > <br/> Add user photo(s) </label>
    <input hidden id="cover" type=file name="file" accept="*.jpg">
	<input name="betty" id= "sub"  type="submit" value="insert">
	</div>
	</div>
</form>
<?php  
include("inc/footer.php");
?>
</body>
</html>
