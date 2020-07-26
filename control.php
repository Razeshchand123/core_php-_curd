<?php 
ob_start();
session_start();
error_reporting("");

$conn=new PDO("mysql:host=localhost;dbname=buddha_digital;","root","");

// logincode

if(isset($_REQUEST['loginsubmit'])){
	if(empty($_REQUEST['user_name'])||empty($_REQUEST['user_password'])){
		$msg= "your cant input blank";
		header("location:register.php?msg=".$msg);

	}
	else{
		$n=strtolower($_REQUEST['user_name']);
		$p=strtolower($_REQUEST['user_password']);
		// echo $n;
		// echo $p;
		$sql="SELECT*FROM user_detail WHERE name='$n' && password='$p' ";
		$result=$conn->query($sql);
		$row=$result->fetch(PDO::FETCH_ASSOC);
		// echo $row['name'];
		// echo $row['password'];
		if($row['name']==$n && $row['password']==$p){
			$_SESSION['profilepic']=$row['profilepic'];
			 $_SESSION['uname2']=$row['name'];
			 header("location:dashbord.php");
		}
		else{
		$msg ="invalid user name or password";
			header("location:register.php?msg=".$msg);
		}

	}

}






// signupcode

if(isset($_REQUEST['signupsubmit'])){
	$validname=$validaddress=$validpassword=$imagevalid=false;
	


// images validate
$name=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
$targetextension= explode('.', $name);
$getextension=strtolower(end($targetextension));
$range=array('png','jpg','jpeg');

if(in_array($getextension,$range )){
	$folder="images/".$name;
	move_uploaded_file($tmp, $folder);
	$imagevalid=true;
}
else{
		$msg= "your image is not valid";
		header("location:signup.php?msg=".$msg);	
}
// imgae part end
   

               $b=strip_tags(trim($_REQUEST['address']));
           if(!empty($b)){
           	if(strlen($b)>5 && strlen($b)<20){
      $validaddress=true;
           	}
           	else{
           $msg= "set your addree between 5 and 20 ";
		  header("location:signup.php?msg=".$msg);	
            }

           }
           else{
           $msg= "your address is empty";
		   header("location:signup.php?msg=".$msg);	
           }



 $d=strip_tags(trim($_REQUEST['user_password']));
 $d=strtolower($d);
         if(!empty($d)){
         	if(strlen($d)>5 && strlen($d)<15){ 
           $validpassword=true;
         }

         else{
         	$msg= "set your password between 5 to 15 character";
		header("location:signup.php?msg=".$msg);	
         }
        }
         else{
         	$msg= "password is blank";
		header("location:signup.php?msg=".$msg);	
}


   $a=strip_tags(trim($_REQUEST['user_name']));
   $a=strtolower($a);
   
           if(!empty($a)){
           	if(strlen($a)>2 && strlen($a)<12){
           		if(!preg_match('/[^a-zA-Z\d]/', $a)){
           			$validname=true;
           		}
           		else {
             	$msg= "you can only use alphabet(A-Z or a-z AND Digits only";
		        header("location:signup.php?msg=".$msg);	
           }

           }
           else {
           	$msg= "set your name between 2 and 12 length";
		  header("location:signup.php?msg=".$msg);	
           }
       }
       else{
       		$msg= "your name is empty";
		   header("location:signup.php?msg=".$msg);	
           }




if($validname=$validaddress=$validpassword=$imagevalid===true){
	$sql="INSERT INTO user_detail(name,password,address,gender,profilepic) VALUES ('$a','$d','$b','$c','$folder')";
		       if($conn->exec($sql)){
		      $_SESSION['imgpath']=$folder; 	
			  $_SESSION['uname']=$a;
			$msg= "data inserted";
			header("location:dashbord.php?msg=".$msg);		
		}
}


}	

   
        
      
   



// logoutcode
if(isset($_REQUEST['logout'])){
	echo "logout";
	session_unset();
	session_destroy();
	header("Location:register.php");
	exit();
}



// dashbord model form control crete post
// +++++++++++++++++++++++++++++++++
if(isset($_REQUEST['addpostsubmit'])){

  $pdfcontrol=$validtitle=$validdescription=$thumbanail=false;



// by session
      $v=$_REQUEST['authorname'];
		$z=$_REQUEST['authorimage'];
// bysession

      


		// pdf file control
		  $name2=$_FILES['pdffile']['name'];
		   $tmp2=$_FILES['pdffile']['tmp_name'];

         $targetpdf=explode('.',$name2);
          $getpdf=strtolower(end($targetpdf));
          $range2=array('pdf');
          if(in_array( $getpdf, $range2)){
                $tf2="images/subjectthumbnail/".$name2;
		          move_uploaded_file($tmp2, $tf2);
          	      $pdfcontrol=true;

          }
          else{
		    $msg= "your data is not valid please insert only pdf file";
		    header("location:dashbord.php?msg=".$msg);	
          }
     	// pdf file control
// description
             $y=strip_tags(trim($_REQUEST['description']));
             if(!empty($y)){
             	$validdescription=true;
              if(strlen($y)>1000){
              	$msg= "your description to   long  then 120 characters";
                header("location:dashbord.php?msg=".$msg);	
              }
              if(strlen($y)<20){
              	$msg= "your description to short  then 20 characters";
                 header("location:dashbord.php?msg=".$msg);	
              }  
                 }
             else{
             	 $msg="your description is empty";
              header("location:dashbord.php?msg=".$msg);	
             }

// titile
     $x=strip_tags(trim($_REQUEST['post_title']));
     if(!empty($x)){
     	if(strlen($x)>5 && strlen($x)<50){
     		if(!preg_match('/[^a-zA-Z\d\s]/', $x)){
     			$validtitle=true;		
     	}
     	else{
     		$msg="you can only enter alphabet and digits for titile";
          header("location:dashbord.php?msg=".$msg);	


     	}
     	}
     	else{ $msg="set your title lenth between 3 to 15 character";
         header("location:dashbord.php?msg=".$msg);	
          }

      }
      else{ $msg="your post tile is empty";
         header("location:dashbord.php?msg=".$msg);	
         }
// tittle


// imagecontrol
        
         $name=$_FILES['postth']['name'];
		$tmp=$_FILES['postth']['tmp_name'];
         
          $targetext=explode('.', $name);
          $getext=strtolower(end($targetext));
          $range=array('png','jpg','jpeg');
          if(in_array(  $getext, $range)){
          	$tf="images/subjectthumbnail/".$name;
          	move_uploaded_file($tmp, $tf);
          	$thumbanail=true;
          }

          else{
		$msg= "your thumbnail image is not valid";
		header("location:dashbord.php?msg=".$msg);	
          }

          if($pdfcontrol=$validtitle=$validdescription=$thumbanail===true){
          
          		  $sql="INSERT INTO megadata(aname,title,pdetail,pthumbnail,data,aimg) VALUES ('$v','$x','$y','$tf','$tf2','$z')";
            if($conn->exec($sql)){
            	

              $msg= "data inserted";
              header("location:dashbord.php?msg=".$msg);	
          }
         

          }


     		}





	


// dashbord delete btn code
if(isset($_REQUEST['delsubmit'])){
	$sql="DELETE FROM megadata WHERE id='{$_REQUEST['did']}'";
	if($conn->exec($sql)){
		$msg= "data deleted";
		header("location:dashbord.php?msg=".$msg);
	}
}


// update <code></code>





?>