<?php  
       include("dbconfig.php");
	     //check database connect or not  
 $query="select * from regdeath";  
 $connect=mysqli_query($db,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not
 ?>
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8"> 
	  <title>birth display</title>
	  <link rel="stylesheet"  type="text/css" href="../css/style.css">
 <body>  
 <div class="login">
    
     <a id="add" href="users/regdeath.php">+add</a>
     <h1 align="center">death record </h1>
   <div class="ttaabb">  
      <table border="1">  
           <tr>  
                <th>DID</th>   
                <th>name</th>  
                <th>d_cause</th>  
				<th>date of death</th>  
				<th>place of death</th>   
				<th>record delete</th> 
				<th>record edit</th>    
           </tr>  
           <?php   
           $i=0;
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                         $did=$data['did'];
                         $name=$data['title']; 
                         $d_cause=$data['d_cause'];
                         $dod=$data['dod']; 
                         $region=$data['region'];
                            
                           ?>    <tr>  
                               <td><?php echo $did ?></td>  
                               <td><?php echo $name?></td>  
                               <td><?php echo $d_cause ?></td>  
                               <td><?php echo $dod ?></td>  
						 <td><?php echo $region ?></td>	 
                               <td>     <form action="dashbor.php" method="POST" class="d-inline">
                               <button type="submit" name="delete_death" value="<?=$data['did'];?>" class="btn btn-danger btn-sm">Delete</button>
                                  </form>
                                  </td>
                                  <td><a href="users/editdeath.php?id=<?= $data['did']; ?>" class="btn btn-success btn-sm">Edit</a>
             </td>  
                               </tr>  
                               <?php }}?>         
           
      </table>  
 </div> 
			</div> 
 </body>  
 </html>