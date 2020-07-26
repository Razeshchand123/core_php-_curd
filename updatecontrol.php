<?php 
session_start();
$conn=new PDO("mysql:host=localhost;dbname=buddha_digital;","root","");
if($conn){
  echo "connection good<br>";
}



// update code
if(isset($_REQUEST['newupdate'])){
	if(empty($_REQUEST['newpost_title'])|| empty($_REQUEST['newdescription'])||empty($_REQUEST['newid'])){
		echo "insert all data";
	}
	else{
		$f=$_REQUEST['newpost_title'];
		$g=$_REQUEST['newdescription'];
       $h=$_REQUEST['newid'];
   
      echo $f."<br>".$g."<br>".$h;

 // pdf control
 echo "hello iam here";

  $name= $_FILES['postth']['name'];
  $name= $_FILES['ravan']['name'];
  $tmp= $_FILES['ravan']['tmp_name'];
  $f3="images/subjectthumbnail/".$name;
  $s3=move_uploaded_file($tmp,$f3);

// new thumbnailcontrol

  $name2=$_FILES['newpostth']['name'];
    $tmp2=$_FILES['newpostth']['tmp_name'];
 	  $f4="images/subjectthumbnail/".$name2;
 	  $s4=move_uploaded_file($tmp2, $f4);


 	  if($s3){
 	  	if($s4){
 	  		echo "ready for update query";
 	  	}
 	  }
 	}

}


?>