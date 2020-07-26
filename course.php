<?php include_once("nav.php"); ?>
<div class="mt-5">
  <p class="text-white">jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj</p>
  </div>

<!-- all cources >button part -->

    <div class="container-fluid mtop mt-3 bg-dark full">
<div class="row text-center bg-dark p-3 w-100 mtop"  >
  <a href="#" class="text-white"><h3>All Cources</h3></a>
    <a href="register.php" class="ml-2">(+add cources)</a>
</div>
</div>
<!-- latest courcs section -->
<!-- latest courcs section -->
<div class="container">
  <div class="row m-2 ">
 <div class="col-sm-9 ">

  <?php
  $sql= "SELECT * FROM megadata";
  $result=$conn->query($sql);
  if($result->rowCount()>0){
    while(  $row=$result->fetch(PDO::FETCH_ASSOC)){
     
      ?>

 <div class="row myshadow">
    <div class="col-md-8">

     <a href="onecource.php?id=<?php echo $row['id'];?>">
      <h5 class="text-center font-varient"><?php echo $row['title']; ?></h5>
      <img src="<?php echo $row['pthumbnail']; ?>" class="img-fluid img-thumbnail postimg" >
    </a>

      <h5 class="text-center"><?php echo $row['price']; ?></h5>
    </div>
    <div class="col-md-4 mt-4">
      <div class="media">
  <img class="mr-3" src="<?php echo $row['aimg']; ?>" class="img-thumbnail img-fluid" height="75" width="75" >
  <div class="media-body">
    <a href="onecource.php?id=<?php echo $row['id'];?>">
    <h5 class="mt-0 font-varient2">"<?php echo $row['title']; ?>" </h5></a>
   <p> "<?php echo $row['pdetail']; ?>" </p>

    <a href="onecource.php?id=<?php echo $row['id'];?>">more</a>
  </div>
</div>
    </div>
      <!-- like and view -->
  <div class=" mb-2 text-center w-100 d-flex justify-content-around">
    <span>21<i class="fas fa-thumbs-up"></i></span>
    <span>15<i class="fas fa-eye"></i></span></div>
  </div>

<br><br>
<?php

  }
  }
  ?>

 </div>
<!-- popularpost partstrart -->
 <div class="col-sm-2 offset-sm-1 text-center d-flex flex-column ">
  <!-- recent wala part -->
 <h3 class="ml-2 font-varient2">NEW</h3>
  <?php 
$sql="SELECT*FROM megadata LIMIT 3";
$result=$conn->query($sql);
if($result->rowCount()>0){
while($row=$result->fetch(PDO::FETCH_ASSOC)){
  ?>
  <div class="ml-3">
   <a href="onecource.php?id=<?php echo $row['id'];?>">
      <img src="<?php echo $row['pthumbnail']; ?>" class="img-fluid rounded w-75 mb-3 " >
    </a>
  </div>
  <?php 
}}

  ?>
<a href="course.php" class="text-center">view all</a>

<br>
<hr class="bg-success">
<br>

  <!-- recent wala part -->
 <h3 class="font-varient2">Popular</h3>
  <?php 
$sql="SELECT*FROM megadata LIMIT 3";
$result=$conn->query($sql);
if($result->rowCount()>0){
while($row=$result->fetch(PDO::FETCH_ASSOC)){
  ?>
  <div class="ml-3">
   <a href="onecource.php?id=<?php echo $row['id'];?>">
      <img src="<?php echo $row['pthumbnail']; ?>" class="img-fluid rounded w-75 mb-3" >
    </a>
  </div>
  <?php 
}}

  ?>
<a href="course.php" class="text-center">view all</a>
   
 </div>
<!-- popularpost partend -->
</div>
</div>




<!-- second row -->

<!-- second row end -->
 <!-- view all button -->

 <div class="container pb-2">
 <div class="row">
  <div class="col-sm-3 m-auto">
 <!-- <a href="#" class="btn btn-info text-center">view all cources</a> -->
</div>
</div>
</div>

<!-- footer part -->

<div class="container-fluid   w-100 bg-dark full" style="padding-top:7%;padding-bottom:7%;">
 
<div class="row text-center">
  <div class="animated slow rollIn social" >
  <a href="https://www.facebook.com/razesh10"><i class="fab fa-facebook fa-3x"></i></a>
   <a href=""><i class="fab fa-instagram-square fa-3x"></i></a>
   <a href=""><i class="fab fa-google-plus fa-3x"></i></a>
   <a href=""><i class="fab fa-youtube fa-3x"></i></a>
</div>
</div>



<div class="row  bg-dark text-center" >
  <p class="text-white text-capitalize mt2">
  All &#174;Right Reserve To Buddha Digital</p>
  <a href="#" class="scrolltop">top</a>

  </div>
</div>



<!--  -->
<div class="vertical" >
  <a href="https://www.facebook.com/razesh10"><i class="fab fa-facebook fa-2x"></i></a>
   <a href=""><i class="fab fa-instagram-square fa-2x"></i></a>
   <a href=""><i class="fab fa-google-plus fa-2x"></i></a>
   <a href=""><i class="fab fa-youtube fa-2x"></i></a>
</div>
<!--  -->


<style>
  .vertical{
    display: flex;
    flex-direction: column;
  position:fixed;
  top: 40%;
  right: 0.5%;
}
.fa-2x{
  color: rgb(168,50,149);
  transition: 0.5s;
}
.fa-2x:hover{text-shadow: 2px 2px 2px black;}

  .fa-3x{color:rgba(0,0,0,0.5);text-shadow: 2px 1px 2px white;}
  .fa-3x:hover{color:rgba(0,0,0,0.8);}

  .tp{
  direction: ltr;
  padding: 0 2% 0 0;
  font-variant: small-caps;


}
.font-varient{
text-transform: capitalize;
font-variant: small-caps;
}
.font-varient2{
text-transform: capitalize;
font-variant: small-caps;
font-size: 90%;

}
   
   .myshadow{box-shadow:3px 2px 6px 4px darkseagreen;}
  .postimg{
  height: 300px;
}
  #dashbord{
  animation: plus 2s infinite;
}

@keyframes plus{
  0%{box-shadow: 0 0 0 green;}
  100%{box-shadow: 2px 2px 20px #FFFF00;}
}

#dashbord2{
  animation: plus2 1.5s infinite;
}

@keyframes plus2{
  0%{box-shadow: 0 0 0 green;}
  100%{box-shadow: 2px 2px 20px #FF00FF;}
}
.mtop{
  /* margin-top: 20%; */
}
 @media only screen and (max-width: 412px) {
  .full {
  width: 122%;
  }
}
</style>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>