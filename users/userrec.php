
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8"> 
	  <title>birth display</title>
	  <link rel="stylesheet"  type="text/css" href="../css/style.css">
 <body>  
 <div class="login">
     <h1 align="center">users </h1>
   <div class="ttaabb">  
      <table border="1">  
           <tr>    
                <th>user Name</th>  
                <th>user email</th>  
                <th>address</th>  
			 <th>role</th>  
			 <th>photo</th>
			 <th>record delete</th>     
           </tr>  
           <?php 
           $i=0; 
       include("dbconfig.php");
	     //check database connect or not  
 $query="select * from user";  
 $connect=mysqli_query($db,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not
 if ($num>0) {  
     while($data=mysqli_fetch_assoc($connect)){
          
          $bid=$data['username'] ; 
          $name=$data['useremail']; 
          $gender=$data['useraddress'];  
          $dbo=$data['userrole'];
          $image=$data['userimage']; 
     $i++
 ?>
      <tr>  
          <td><?php echo $bid; ?></td>  
         <td><?php echo $name; ?></td>  
          <td><?php echo $gender; ?></td>  
          <td><?php echo $dbo; ?></td>
          <td><img src="uploads/<?php echo $image; ?>" width="60" height="60"></td>  
          <td>     <form action="dashbor.php" method="POST" class="d-inline">
                  <button type="submit" name="delete_student" value="<?=$data['userId'];?>" class="btn btn-danger btn-sm">Delete</button>
                     </form></td>
      </tr>    
          <?php }}?>
      </table>  
 </div> 
			</div> 
 </body>  
 </html>