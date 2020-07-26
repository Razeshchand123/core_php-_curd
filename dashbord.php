

<?php
session_start();
error_reporting("");

$conn=new PDO("mysql:host=localhost;dbname=buddha_digital;","root","");



if(isset($_GET['msg'])){
  echo "<p class='text-center text-danger'>".$_GET['msg']."</p>";
 ?>
 <div class="text-center ">
  <img src='images/wrongmsg.jpg' class='img-fluid text-center ' style="height:20px;width:20px;">
</div>
<?php }


// $currentuser=$_SESSION['uname'];
if(isset($_SESSION['uname2'])){
$currentuser=$_SESSION['uname2'];
}
if(isset($_SESSION['uname'])){
$currentuser=$_SESSION['uname'];
}

if(!$currentuser){
  $msg="please login first";
  header("location:register.php?msg=".$msg);
}

  // echo "<br>$currentuser<br>";


  // imgpath session
  if(isset($_SESSION['profilepic'])){
    $ipath=$_SESSION['profilepic'];
  }
   if(isset($_SESSION['imgpath'])){
     $ipath=$_SESSION['imgpath'];
   }  
   // echo "</br>".$ipath;





?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="mycss.css">
<script src="https://kit.fontawesome.com/a8a1b7735d.js" crossorigin="anonymous"></script>
    <title>dashboard</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   
  
  </head>
  <body class="bg-dark text-white">



<div class="container">
  <div class="row">
    <div class="col-sm-4 m-auto">
    <img src="<?php echo $ipath ?>" class="img-fluid rounded" height="100" width="100">
    <h5 class=" text-capitalize">hello <?php echo $currentuser; ?></h5>
    <a href="index.php" class=" d-block  "><i class="fas fa-globe ml-4 fa-2x ml-4 " id="dashbord"></i></a>
  </div>
  </div>

</div>


<!-- logout code -->
<div class="text-right" style="width:93%;">
  <form action="control.php" method='post'>
 <input type="submit" name="logout" value="logout" class="btn btn-danger text-right">
  </form>
  </div>



<div class="container">
  <!-- model code start -->
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 <small>+post</small> 
</button>

<!-- Modal body-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">+POst</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

         <form action="control.php" method="post" enctype="multipart/form-data"  class="form-group" >
           <br>
          <p class="bg-dark text-center">SET post thumbnail</p>
          <input type="file" name="postth" class="form-control"><br><br>
          <input type="text" name="post_title" class="form-control" placeholder="insert post title">
          <br><br>
          <textarea name="description" class="form-control" > description about your post</textarea>
          <br><br><br>
           <input type="text" name="price" class="form-control" placeholder="set your course price Eg. 250">
          <br><br><br>
          <p class="bg-dark text-center">insert your pdf file</p>
          <input type="file" name="pdffile" class="form-control">
           <input type="hidden" name="authorimage" value="<?php echo $ipath;?>">


          <input type="hidden" name="authorname" value="<?php echo $currentuser;?>">

           <input type="submit" name="addpostsubmit" value="newpost" class="btn btn-success btn-block">
        </form>
      </div>

       <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal" >Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div> -->
       </div>
       
  </div>
</div>
  <!-- modelcode end -->

	<div class="row">
		<table class="table table-hover table-bordered table-striped  table-sm w-100 table-responsive table-dark">
			<thead>
				<th>ID</th>
        <th>authorimages</th>
        <th>Author</th>
				<th>title</th>
				<th>pdfdata</th>
				<th>postthubnail</th>
				<th>text</th>
        <th colspan="2">Action</th>
        <th>price</th>
        <th>view</th>
        <th>like</th>
          </thead>
          <tbody>

     <?php
     echo $currentuser;

       $sql="SELECT*FROM megadata WHERE aname='$currentuser' ORDER BY id DESC";
       $result=$conn->query($sql);
       
       
       

       if($result->rowCount()>0){

        while($row=$result->fetch(PDO::FETCH_ASSOC)){
 ?>
         <tr>
            <td><?php echo $row['id']; ?></td>
          <td> <img src="<?php echo $row['aimg']; ?>" class=" rounded img-fluid" style="width:auto; height:70px;"></td>
           <td><?php echo $row['aname']; ?></td>
          <td><?php echo $row['title']?> </td>

          <td><a href="<?php echo $row['data']; ?>"><img src="images/pdficon.png" target="_blank" height="50" width="40"></a></td>

          <td> <img src="<?php echo $row['pthumbnail']; ?>" class="img-fluid rounded " style="width:auto; height:70px;"></td>

          <td><?php echo $row['pdetail'];?> </td> 


          <td>
            <form action="control.php" method="post">
              <input type="hidden" name="did" value="<?php echo $row['id'];?>">
              <input type="submit" name="delsubmit" value="delete" class="btn btn-sm btn-danger">
          </td>

          <!-- update wala code -->
          <td>
            <!-- model code start -->
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" disabled>
 <small>update</small> 
</button>

<!-- Modal body-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

         <form action="updatecontrol.php" method="post" enctype="multipart/form-data" class="form-group" >
           <br>
          <p>.edit post thumbnail</p>
          <input type="file" name="newpostth" class="form-control"><br><br>
          
        
          <input type="text" name="newpost_title" class="form-control" placeholder="insert post title">
          <br><br>
          <textarea name="newdescription" class="form-control" > description about your post</textarea>
          <br><br><br>
          <p>.edit your pdf file</p>
          <input type="file" name="newpdf" class="form-control">
           <input type="hidden" name="newid" value="<?php echo $row['id'];?>">
         

           <input type="submit" name="newupdate" value="update" class="btn btn-success btn-block">
        </form>
      </div>

       <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal" >Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div> -->
       </div>
       
  </div>
</div>
  <!-- modelcode end -->
          </td>
          <td><?php echo $row['price'];?></td>
           <td><?php echo $row['view'];?></td>
            <td><?php echo $row['like'];?></td>
          <!-- update wala code -->
          </tr>
    <?php
        } }
       
     ?>
       </tbody>
       </table>            
	</div>
	</div>











<style>
table{ width:100%; }
  table td{ font-size: 85%;}
  table th{font-size: 75%;}
 #dashbord{animation: plus 2s infinite;}

@keyframes plus{
  0%{box-shadow: 0 0 0 green;}
  100%{box-shadow: 2px 2px 20px #FFFF00;}
}
</style>


  	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

