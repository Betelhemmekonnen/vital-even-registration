
<?php
  include("dbconfig.php");
  include("inc/nav.php");
  if (isset($_POST['login'])) {
	$username = $_POST['user'];
	$pass = $_POST['pass'];
	$ss = mysqli_query($db, "SELECT username FROM user where useremail='$username' ");
	if(mysqli_num_rows($ss)>0){
		while($data=mysqli_fetch_assoc($ss)){  
			$use=$data['username'];
		}
	}
	$ssd= mysqli_query($db, "SELECT userimage FROM user where useremail='$username' ");
	if(mysqli_num_rows($ss)>0){
		while($data=mysqli_fetch_assoc($ssd)){  
			$im=$data['userimage'];
		}
	}
	$sql = mysqli_query($db, "SELECT * FROM user WHERE useremail = '$username' AND userpass = '$pass'");

	if (mysqli_num_rows($sql) > 0) {
		$data = mysqli_fetch_assoc($sql);
         session_start();
		$_SESSION['use']=$use;
		$_SESSION['im']=$im;
		header("Location: dashbor.php");
	}else{
		header("Location: ?login_error");
	}
}
  ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<title>event login</title>
</head>
<body>
   <div class="login">
      <h1 align="center">login</h1>
	<div class="lolo">
      <form id="bb" action="#" method="post">
	     <p>Email</p>
		 <input type="text" name="user">
	     <p>password</p>
		 <input type="password" name="pass"><br>
		 <a href="#">forgot password</a><br>
		 <input name="login" id= "sub"  type="submit" value="login">
	    </form>	 
	    </div>
</div>
		<?php
     include("inc/footer.php");
  ?>
</body>
</html>