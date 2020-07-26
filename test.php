<?php
session_start();
// error_reporting("");
$conn=new PDO("mysql:host=localhost;dbname=buddha_digital;","root","");

$a="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";



if (strlen($a) > 500) {

    // truncate string
    $stringCut = substr($a, 0, 500);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $a = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $a .= '... <a href="/this/story">Read More</a>';
}
echo $a;


$b="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point The  of using using using using";
echo strlen($b);


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a8a1b7735d.js" crossorigin="anonymous"></script>
    <title>my blog</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link rel="stylesheet" type="text/css" href="mycss.css">
          <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
    <title>Budhha Digital</title>
  </head>
  <body>


<div class="conatiner">
  <div class="row">

   <div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>

    

  </div>
</div>
 


<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 if(isset($_REQUEST['submit'])){
  
 
// file validation

// $g= print_r($_FILES['pic']);
$name=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
$fileextension= explode('.', $name);

$getextension=strtolower(end($fileextension));
$extensionrange=array('jpg','jpeg');
if(in_array($getextension, $extensionrange)){
  $folder="images/".$name;
  move_uploaded_file($tmp, $folder);
  echo "done";
}
else {
  echo "check youe file extension";
}




 // name
//   $a=$conn->real_escape_string($_REQUEST['name']);
// echo "hello";
//  $a=strip_tags(trim($_REQUEST['name']));
//  if(!empty($a)){
//   if(strlen($a)>2 && strlen($a)<15){
// // echo $a;
// if(!preg_match('/[^a-zAZ]\d/', $a)){
//   echo $a;
//   } 
// }
// else{ echo "this is empty";} }





// emaail



// $b=strip_tags(trim($_REQUEST['email']));
// $b=$conn->real_escape_string($b);
// if(strlen($b)<17){
//     if(filter_var($b,FILTER_VALIDATE_EMAIL)){
// echo $b;
// }
// else{echo "wrong email";}


// }
// else {
//   echo "long email";
// }






////////
}}


 ?>


<h3 class="text-center">validation code</h3>
<form action="" method="post"class="form-group w-50 m-auto" enctype="multipart/form-data">
  <input type='text' name='name' class="form-control">
  <input type="email" name="email"class="form-control">
  <input type="password" name="password"class="form-control">
  <input type="file" name="pic">
  <input type="submit" name="submit" value="submit"class="form-control btn btn-info">
</form>













<style>
  .item{
    border: 2px solid balck;
    background-color: red;
    padding: 3%;
  }
  

</style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="owl.carousel.min.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
    autoplay:true,
    autoplayTimeout:1000,
    loop:true,
    margin:10,
    nav:true,
    items:5,
    
    
});
    </script>
  </body>
  </html>
