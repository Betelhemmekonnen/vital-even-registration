<?php
   include("../dbconfig.php");
   // Check if register button has been clicked
   if (isset($_POST['betty'])) {
	   $username= $_POST['name'];
	   $email=  $_POST['fname'];
	   $passwor =  $_POST['gfname'] ;
	   $address = $_POST['date'];
	   $bid= $_POST['place'];
	   $position = $_POST['region'];
	   $contact = $_POST['zone'];
	   $job = $_POST['woreda'];
	   $role = $_POST['role'];
//  File upload directory

$targetDir = "../uploads/";
include("../dbconfig.php");
// Check if register button has been clicked
if (isset($_POST['betty'])) {
    $username= $_POST['name'];
    $email=  $_POST['fname'];
    $passwor =  $_POST['gfname'] ;
    $address = $_POST['date'];
    $bid= $_POST['place'];
    $position = $_POST['region'];
    $contact = $_POST['zone'];
    $job = $_POST['woreda'];
    $role = $_POST['role'];
  }


if(isset ($_POST["betty"])) 
{
    if(!empty ($_FILES["file"]["name"]))
    {
        $fileName = basename($_FILES["file"]["name"]);
        $path="../uploads/".$username;
        
        if(!is_dir($path.'/'.$username))
        {
            mkdir($path.'/'.$username, 0777 , true);
        }
        $targetFileCover = $targetDir.$username."/".$fileName;
    
        $filetype= pathinfo($targetFileCover, PATHINFO_EXTENSION);

        // Allow certain file formats
            $allowTypes=array("jpg", "png", "jpeg", 'gif', 'pdf');

        if (in_array ($filetype, $allowTypes))
        {
            // upload flle to server
            //  move_uploaded_file($_FILES["file"][ "tmp_name"], $targetFilePath);
        if (move_uploaded_file($_FILES["file"][ "tmp_name"], $targetFileCover) ) {
            // insert image tile name into database
            echo $statusMsg="Moved uploaded files";
        }
        else{
            echo  $statusMsg="sorry, there was an error uploading your file.";
        }
        }
        else
        {
            echo  $statustsg ='Sorry, only JPG, PEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }
    else{
        echo  $statusmsg="Please select a file to upload.";
    }

    $sqll = mysqli_query($db, "INSERT INTO user (username,useremail,userpass,useraddress,userbid,userposition,usercontact,
    userjob,userrole,userimage)
     VALUES ('$username','$email','$passwor','$address','$bid','$position','$contact','$job','$role',
'$targetFileCover')");
 if($sqll)
 {
     // echo must be removed used only for debudding purposes only
    echo  $statusmsg="\n The file ".$fileName. " has been uploaded successfully";
 }
 else
 {
     echo  $statustsg="File upload failed, please try again.";
 }
}
    else{
        echo  $statusmsg="Please select a file to upload.";
    }

}
include("../dbconfig.php");
// Check if register button has been clicked
if (isset($_POST['register'])) {
    $name= $_POST['name'];
	$fname=  $_POST['fname'];
	$gfname =  $_POST['gfname'] ;
	$gender = $_POST['sex'];
	$date_of_birth = $_POST['date'];
	$place_of_birth = $_POST['place'];
	$region = $_POST['region'];
	$zone = $_POST['zone'];
	$woreda = $_POST['woreda'];
	$nationality = $_POST['nation'];
	$mfullname = $_POST['mfname'];
	$mnationality = $_POST['mnation'];
	$ffullname = $_POST['ffname'];
	$fnationality = $_POST['fnation'];
	$father_bid= $_POST['fbid'];
	$mother_bid= $_POST['mbid'];
//  File upload directory

$targetDir = "../uploads/";
include("../dbconfig.php");
// Check if register button has been clicked
if (isset($_POST['register'])) {
	$name= $_POST['name'];
	$fname=  $_POST['fname'];
	$gfname =  $_POST['gfname'] ;
	$gender = $_POST['sex'];
	$date_of_birth = $_POST['date'];
	$place_of_birth = $_POST['place'];
	$region = $_POST['region'];
	$zone = $_POST['zone'];
	$woreda = $_POST['woreda'];
	$nationality = $_POST['nation'];
	$mfullname = $_POST['mfname'];
	$mnationality = $_POST['mnation'];
	$ffullname = $_POST['ffname'];
	$fnationality = $_POST['fnation'];
	$father_bid= $_POST['fbid'];
	$mother_bid= $_POST['mbid'];
}


if(isset ($_POST["register"])) 
{
 if(!empty ($_FILES["file"]["name"]))
 {
     $fileName = basename($_FILES["file"]["name"]);
     $path="../uploads/".$name;
     
     if(!is_dir($path.'/'.$name))
     {
         mkdir($path.'/'.$name, 0777 , true);
     }
     $targetFileCover = $targetDir.$name."/".$fileName;
 
     $filetype= pathinfo($targetFileCover, PATHINFO_EXTENSION);

     // Allow certain file formats
         $allowTypes=array("jpg", "png", "jpeg", 'gif', 'pdf');

     if (in_array ($filetype, $allowTypes))
     {
         // upload flle to server
         //  move_uploaded_file($_FILES["file"][ "tmp_name"], $targetFilePath);
     if (move_uploaded_file($_FILES["file"][ "tmp_name"], $targetFileCover) ) {
         // insert image tile name into database
         echo $statusMsg="Moved uploaded files";
     }
     else{
         echo  $statusMsg="sorry, there was an error uploading your file.";
     }
     }
     else
     {
         echo  $statustsg ='Sorry, only JPG, PEG, PNG, GIF, & PDF files are allowed to upload.';
     }
 }
 else{
     echo  $statusmsg="Please select a file to upload.";
 }
$sqll = mysqli_query($db, "INSERT INTO regbirth (name,fname,gfname,gender,dob,pob,region,zone,
woreda,nationality,mother_bid,father_bid,mfullname,m_nationality,ffullname,f_nationaliyty,image)
 VALUES ('$name','$fname','$gfname','$gender','$date_of_birth','$place_of_birth','$region','$zone','$woreda','$nationality',
 '$mother_bid','$father_bid','$mfullname','$mnationality','$ffullname','$fnationality','$targetFileCover')");
if($sqll)
{
  // echo must be removed used only for debudding purposes only
 echo  $statusmsg="\n The file ".$fileName. " has been uploaded successfully";
}
else
{
  echo  $statustsg="File upload failed, please try again.";
}
}
 else{
     echo  $statusmsg="Please select a file to upload.";
 }

}

?>