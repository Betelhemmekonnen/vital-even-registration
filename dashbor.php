<?php
session_start( );
 if((!isset($_SESSION['im']))){
   header('location:login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<title>Document</title>
</head>
<body>
  <div class="all">
      <div class="sidebar"> 
         <center>
             <img class="user" src="uploads/<?=$_SESSION['im'] ?>">
              <h3 class="user-name"><?php echo $_SESSION['use'];?></h3>
          </center>
          <hr>
          <div class="links">
          <form  action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
           <ul>
             <li><img src="img/dashboard-layout.png"><input name="register" id= "sub"  type="submit" value="dashboard"></li>
             <li><img src="img/add-database.png"><span><input name="register" id= "sub"  type="submit" value="record">
			<div class="subb">
             <ul>
				 <li><input name="birth" id= "sub"  type="submit" value="birth"></li>
                 <li><input name="deathth" id= "sub"  type="submit" value="death"></li>
                 <li><input name="marriage" id= "sub"  type="submit" value="marriage"></li>
                 <li><input name="divorce" id= "sub"  type="submit" value="divorce"></li>
            </ul> 
            </div>  
           </li>   
            <li><img src="img/select-users.png"><input name="register" id= "sub"  type="submit" value="users"><span>
			<div class="subb">
             <ul>
				 <li><input name="insert" id= "sub"  type="submit" value="insert"></li>
                 <li><input name="view" id= "sub"  type="submit" value="view user"></li>
                 <li><input name="edit" id= "sub"  type="submit" value="edit value"></li>
              </ul>
            </div>
          </li>
          <li><a href="index.php"><img src="img/logout-icon-260nw-609798833.webp"><input name="logout" id= "sub"  type="submit" value="log out"></a></li>
           </ul>  
</form>  
      </div>
</div>
      <div class="hodu">
     
        <?php
             include("dbconfig.php");
        if(isset($_POST['delete_student']))
        {
            $student_id = mysqli_real_escape_string($db, $_POST['delete_student']);
        
            $query = "DELETE FROM user WHERE userId='$student_id' ";
            $query_run = mysqli_query($db, $query);
        
            if($query_run)
            {
               include("users/userrec.php");
                exit(0);
            }
            
        }
        if(isset($_POST['delete_birth']))
        {
            $student_id = mysqli_real_escape_string($db, $_POST['delete_birth']);
        
            $query = "DELETE FROM regbirth WHERE bid='$student_id' ";
            $query_run = mysqli_query($db, $query);
        
            if($query_run)
            {
               include("users/birthrec.php");
                exit(0);
            }
           
          }
          if(isset($_POST['delete_death']))
        {
            $student_id = mysqli_real_escape_string($db, $_POST['delete_death']);
        
            $query = "DELETE FROM regdeath WHERE did='$student_id' ";
            $query_run = mysqli_query($db, $query);
        
            if($query_run)
            {
               include("users/deathrec.php");
                exit(0);
            }
           
          }
          if(isset($_POST['delete_re']))
          {
              $student_id = mysqli_real_escape_string($db, $_POST['delete_re']);
          
              $query = "DELETE FROM regmarriage WHERE mid='$student_id' ";
              $query_run = mysqli_query($db, $query);
          
              if($query_run)
              {
                 include("users/divorcerec.php");
                  exit(0);
              }
             
            }
          if(isset($_POST['update_birth']))
{
      include("dbconfig.php");
    $student_id = mysqli_real_escape_string($db, $_POST['bid']);

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $dob = mysqli_real_escape_string($db, $_POST['date']);
    $ffullname = mysqli_real_escape_string($db, $_POST['ffname']);
    $mfullname= mysqli_real_escape_string($db, $_POST['mfname']);
    $bid= mysqli_real_escape_string($db, $_POST['bid']);
    $query = "UPDATE regbirth SET name='$name', dob='$dob',ffullname='$ffullname', mfullname='$mfullname' WHERE bid='$student_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        include("users/birthrec.php");
        exit(0);
    }
  }
  if(isset($_POST['update_user']))
  {
        include("dbconfig.php");
      $student_id = mysqli_real_escape_string($db, $_SESSION['use'] );
  
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $useremail = mysqli_real_escape_string($db, $_POST['useremail']);
      $userpass = mysqli_real_escape_string($db, $_POST['userpass']);
      $useraddress= mysqli_real_escape_string($db, $_POST['useraddress']);
      $userjob= mysqli_real_escape_string($db, $_POST['userjob']);
      $query = "UPDATE user SET username='$username', useremail='$useremail',userjob='$userjob', useraddress='$useraddress' WHERE username='$student_id' ";
      $query_run = mysqli_query($db, $query);
  
      if($query_run)
      {
          include("users/userrec.php");
          exit(0);
      }
    }
  if(isset($_POST['update_death']))
  {
        include("dbconfig.php");
      $student_id = mysqli_real_escape_string($db, $_POST['did']);
  
      $name = mysqli_real_escape_string($db, $_POST['name']);
      $dob = mysqli_real_escape_string($db, $_POST['date']);
      $d_cause = mysqli_real_escape_string($db, $_POST['d_cause']);
      $region= mysqli_real_escape_string($db, $_POST['region']);
      $did= mysqli_real_escape_string($db, $_POST['did']);
      $query = "UPDATE regdeath SET title='$name', dob='$dob',d_cause='$d_cause', region='$region' WHERE did='$student_id' ";
      $query_run = mysqli_query($db, $query);
  
      if($query_run)
      {
          include("users/deathrec.php");
          exit(0);
      }
    }

        if(isset($_POST['register'])){
           include("dash.php");
           include("inc/footer.php");
        }
        if(isset($_POST['birth'])){
          include("users/birthrec.php");
          include("inc/footer.php");
          }
      
         if(isset($_POST['deathth'])){
          include("users/deathrec.php");
          include("inc/footer.php");
        }
    
       if(isset($_POST['marriage'])){
        include("users/mariagerec.php");
        include("inc/footer.php");
      }
  
     if(isset($_POST['divorce'])){
       include("users/divorcerec.php");
       include("inc/footer.php");

      }

      if(isset($_POST['insert'])){
        include("users/reguser.php");
      }

        if(isset($_POST['edit'])){
      include("users/edituser.php");
     }

    if(isset($_POST['view'])){
         include("users/userrec.php");
    }
    if(isset($_GET['search']))
    {
      include("dbconfig.php");
      $filtervalues=$_GET['search'];
      $query="SELECT * FROM user WHERE CONCAT(username,userId) LIKE '%$filtervalues%'";
      $query_run = mysqli_query($db,$query);
    
    ?>
    <div class="login">
    <h1 align="center">search result </h1>
  <div class="ttaabb">  
     <table border="1">  
          <tr>    
               <th>user Name</th>  
               <th>user email</th>  
               <th>address</th>  
       <th>role</th>  
       <th>photo</th>    
          </tr>  
          <?php   
                if(mysqli_num_rows($query_run)>0)
                {
                  foreach($query_run as $items)
                  {  
                         echo "  
                              <tr>  
                              <td>".$items['username']."</td>  
                              <td>".$items['useremail']."</td>  
                              <td>".$items['useraddress']."</td> 
                <td>".$items['userrole']."</td> 
                              <td>".$items['userimage']."</td>  
                              </tr>  
                         ";  
                    }  
               }  
              }
            
          ?> 
     </table>  
</div> 
     </div> 
</div>
</div>
</body>
</html>

    
    
