
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8"> 
	  <title>birth display</title>
	  <link rel="stylesheet"  type="text/css" href="../css/style.css">
     </head>
 <body>  
 <div class="login">
    
     <a id="add" href="users/regbirth.php">+add user</a>
     <h1 align="center">birth record </h1>
   <div class="ttaabb">  
      <table border="1">  
           <tr>  
                <th>BID</th>  
                <th>Name</th>  
                <th>Sex</th>  
                <th>Photo</th>  
				<th>date of birth</th>  
				<th>father name</th>  
				<th>mother name</th> 
				<th>nationality</th>  
				<th>record delete</th> 
				<th>record edit</th>    
           </tr>  
           <?php 
           $i=0; 
       include("dbconfig.php");
	     //check database connect or not  
 $query="select * from regbirth";  
 $connect=mysqli_query($db,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not
 if ($num>0) {  
     while($data=mysqli_fetch_assoc($connect)){  
          $bid=$data['bid'];  
          $name=$data['name']; 
          $gender=$data['gender'];  
          $image=$data['image'];
          $dob=$data['dob'];
          $fname=$data['fname'];
          $mfullname=$data['mfullname'];
          $nationality=$data['nationality']; 
     $i++
 ?>
      <tr>  
          <td><?php echo $bid; ?></td>  
         <td><?php echo $name; ?></td>  
          <td><?php echo $gender; ?></td>  
          <td><img src="uploads/<?php echo $image; ?>" width="60" height="60"></td> 
	    <td><?php echo $dob; ?></td>
	    <td><?php echo $fname; ?></td>
	    <td><?php echo $mfullname; ?></td>
	    <td><?php echo $nationality; ?></td>	
         <td>     <form action="dashbor.php" method="POST" class="d-inline">
                  <button type="submit" name="delete_birth" value="<?=$data['bid'];?>" class="btn btn-danger btn-sm">Delete</button>
                     </form>
                     </td>
                     <td><a href="users/editbirth.php?id=<?= $data['bid']; ?>" class="btn btn-success btn-sm">Edit</a>
</td>   
  </tr>    
           <?php }}?>         
      </table>  
 </div> 
			</div> 
 </body>  
 </html>