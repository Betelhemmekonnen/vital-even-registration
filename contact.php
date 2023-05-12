<link rel="stylesheet"  type="text/css" href="css/style.css">
<?php
 include("dbconfig.php");
 include("inc/nav.php");
 
$messagesent=false;
if(isset($_POST['email']) && $_POST['email'] != ' '){
       if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
  $username=$_POST['name'];
  $useremail=$_POST['email'];
  $messagesubject=$_POST['subject'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];
   $to="bmekonnenad@gmail.com";
   $body="";
   $body.="From: ".$username. "\r\n";
   $body.="email: ".$useremail. "\r\n";
   $body.="message: ".$message. "\r\n";
   $messagesent=true;
   mail($to,$message,$body);
}

/*echo "<pre>";
   print_r($_POST);
echo "</pre>"; yhe form g ar yasgebanewn kelay endimeta yadergal

if(isset($_POST['submit'])){
  if(mail($_POST['email'],$_POST['subject'],$_POST['message'])){
      echo "mail send";
  }else{
    echo  "failed";
  }*/
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/connn.css">
	<title>Document</title>
</head>
<body class="llll">
	<?php
	    if($messagesent):	
	  ?>
	  <h3 >thanks,we'll be in touch </h3>
	  <?php  
	     else:
			?>
	<div class="connn">  
  <form id="contact" action="contact.php" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name" autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" tabindex="2">
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" tabindex="3" >
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="subject" tabindex="4" >
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." value="text" tabindex="5" name="message" ></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>

  <?php
   endif;
  ?>
</div>
<?php /*codepen.io website frame work neger new cheak it*/?>
</body>
</html>