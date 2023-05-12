
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
<a id="add" href="../dashbor.php">to main body</a>
<h1 align="center">register birth</h1>
	<div class="reg">
	<form method="POST" action="../users/uploadbooks.php" enctype="multipart/form-data">
    <label>name</label>
	<input type="text" name="name"><br>
	<label>father name</label>
	<input type="text" name="fname"><br>
	<label>grand father name</label>
	<input type="text" name="gfname"><br>
	<label>sex</label>
	<select type="text" name="sex">
	<option>select sex</option>
	<option>male</option>
	<option> female </option>
	</select><br>
	<label>date of birth</label>
	<input type="date" name="date"><br>
	<label>place of birth</label>
	<input type="text" name="place"><br>
	<label>region</label>
	<input type="text" name="region"><br>
	<label>zone</label>
	<input type="text" name="zone"><br>
	<label>woreda</label>
	<input type="text" name="woreda"><br>
	<label>nationality</label>
	<input type="text" name="nation"><br>
	<label>father full name</label>
	<input type="text" name="ffname"><br>
	<label>father nationality</label>
	<input type="text" name="fnation"><br>
	<label>fatherbid</label>
	<input type="text" name="fbid"><br>
	<label>mother full name</label>
	<input type="text" name="mfname"><br>
	<label>mother nationality</label>
	<input type="text" name="mnation"><br>
	<label>mother bid</label>
	<input type="text" name="mbid"><br>
	<label for="cover"> <img id=blah src="../img/add-image.png" width="52" > <br/> Add user photo(s) </label>
    <input hidden id="cover" type=file name="file" accept="*.jpg">
	<input name="register" id= "sub"  type="submit" value="Submit">
	</div>
	</div>
</form>
<?php  
include("../inc/footer.php");
?>
</body>
</html>
