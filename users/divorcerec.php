<?php  
       include("dbconfig.php");
	     //check database connect or not  
 $query="SELECT * FROM regmarriage WHERE divorced='passive' "; 
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
    
     <h1 align="center">divorce  record </h1>
   <div class="ttaabb">  
      <table border="1">  
           <tr>  
                <th>MID</th>   
                <th>wifebid</th>  
                <th>husband bid</th>  
				<th>date of marriage</th>  
				<th>place of marriage</th>   
				<th>record delete</th> 
				    
           </tr>  
           <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
						$mid=$data['mid'];  
						$wbid=$data['wbid'];  
						$hbid=$data['hbid'];
						$dom=$data['dom'];
				        $mrcity=$data['mrcity'];
                        ?> 
                               <tr>  
                               <td><?php echo $mid ?></td>  
                               <td><?php echo $wbid ?></td>  
                               <td><?php echo $hbid ?></td>  
                               <td><?php echo $dom ?></td>  
						       <td><?php echo $mrcity ?></td>	
							   <td>     <form action="dashbor.php" method="POST" class="d-inline">
                  <button type="submit" name="delete_re" value="<?=$data['mid'];?>" class="btn btn-danger btn-sm">Delete</button>
                     </form>
                     </td> 
                               </tr>  
                          <?php }} ?>
      </table>  
 </div> 
			</div> 
 </body>  
 </html>