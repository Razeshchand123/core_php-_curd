
<?php 
ob_start();
require_once("nav.php"); ?>

<!-- slide part start here -->
<div class="container-fluid mediaclide">
<div class="row">
<div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slide/slide_1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide/slide_2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide/slide_3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<!-- all cources button part -->
<div class="row text-center  p-3 w-100 m-0 ourteam" >
  <a href="#" class="text-white"><h3>latest cources</h3></a>
    <a href="register.php" class="ml-2 text-white">(+add cources)</a>
</div>

<!-- latest courcs section -->
<div class="container">
  <div class="row m-2 ">
 <div class="col-md-9 ">

  <?php
  $sql= "SELECT * FROM megadata LIMIT 3";
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

      <h5 class="text-center">Rs. <?php echo $row['price']; ?></h5>
    </div>
    <div class="col-md-4 mt-4">
      <div class="media">
  <img class="mr-3" src="<?php echo $row['aimg']; ?>" class="img-thumbnail img-fluid" height="75" width="75" >
  <div class="media-body">
    <a href="onecource.php?id=<?php echo $row['id'];?>">
    <h5 class="mt-0 font-varient2">"<?php echo $row['title']; ?>" </h5></a>
   <p class="des"> <?php echo substr($row['pdetail'], 0,500); ?></p>

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
 <div class="col-md-2 offset-md-1 text-center d-flex flex-column ">
  <!-- recent wala part -->
 <h3 class="ml-2 font-varient2">NEW</h3>
  <?php 
$sql="SELECT*FROM megadata  ORDER BY  id ASC LIMIT 3";
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
<a href="course.php" class="text-center btn-block">view all</a>

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

 <div class="container">
 <div class="row ">
  <div class="col-sm-3 m-auto">
 <a href="viewallcources.php" class="btn btn-info text-center">view all cources</a>
</div>
</div>
</div>


<div class="display-4 text-capitalize text-center font-varient mt-5 myshadow ourteam">Our Team</div>

<div class="container-fluid bgtest p-5 ">
<div class="row p-5 ">
<!-- testominial part here -->
  
   <div class="owl-carousel owl-theme ">

   <!-- itemone start -->
    <div class="item  ">
   <blockquote class="blockquote">
  <p class="mb-0 tp ">
      
यो वेबसाइट एकदमिया राम्रो र सर्ल छ | मलाई एकदम सजिलो हिसाब ले बुज्न हुंक्षा र मेन कुरा यसको यौ ट्यूब को video हरु एकदमै मन परछ| धन्यबाद अनि यसतै कॉंटेंट हरु बनाई रकनु 
  </p>
  <footer class="blockquote-footer">Rajesh<cite title="Source Title">chand</cite></footer>
</blockquote>
  </div>
<!-- itemone end -->
<!-- itemone start -->
    <div class="item  ">
   <blockquote class="blockquote">
  <p class="mb-0 tp">
      मलाई यो वेबसाइट बाट बेसिक कॉन्सेप्ट लिन एकदम्ी सजिलो वायो एकदमै सरल तरिकाले बुजाएको भयेकाले
कॉन्सेप्ट लिन सॅज्जिलो वाको छ\|
  </p>
  <footer class="blockquote-footer">Rajesh<cite title="Source Title">chand</cite></footer>
</blockquote>
  </div>
<!-- itemone end -->
<!-- itemone start -->
    <div class="item  ">
   <blockquote class="blockquote">
  <p class="mb-0 tp">
      देरै नै सरल र description मेरो कॉलेज को प्रॉजेक्ट बनौना धेर हेल्प वायो thank you
  </p>
  <footer class="blockquote-footer">Rajesh<cite title="Source Title">chand</cite></footer>
</blockquote>
  </div>
<!-- itemone end -->
<!-- itemone start -->
    <div class="item  ">
   <blockquote class="blockquote">
  <p class="mb-0 tp">Lorem ipsum dolor sit amet, 
  consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">gitanjali<cite title="Source Title">bhatrai</cite></footer>
</blockquote>
  </div>
<!-- itemone end -->
<!-- itemone start -->
    <div class="item  ">
   <blockquote class="blockquote">
  <p class="mb-0 tp">यो वेबसाइट एकदमिया राम्रो र सर्ल छ | मलाई एकदम सजिलो हिसाब ले बुज्न हुंक्षा र मेन कुरा यसको यौ ट्यूब को video हरु एकदमै मन परछ| धन्यबाद अनि यसतै कॉंटेंट हरु बनाई रकन</p>
  <footer class="blockquote-footer">ganesh<cite title="Source Title">naupane</cite></footer>
</blockquote>
  </div>
<!-- itemone end -->
<!-- itemone start -->
    <div class="item  ">
   <blockquote class="blockquote">
  <p class="mb-0 tp">Lorem ipsum dolor sit amet, 
  consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">bhawana<cite title="Source Title">joshi</cite></footer>
</blockquote>
  </div>
<!-- itemone end -->
<!-- itemone start -->
    <div class="item  ">
   <blockquote class="blockquote">
  <p class="mb-0 tp">
       मलाई यो वेबसाइट बाट बेसिक कॉन्सेप्ट लिन एकदम्ी सजिलो वायो एकदमै सरल तरिकाले बुजाएको भयेकाले
कॉन्सेप्ट लिन सॅज्जिलो वा
  </p>
  <footer class="blockquote-footer">Subham<cite title="Source Title">mahara</cite></footer>
</blockquote>
  </div>
<!-- itemone end -->
<!-- itemone start -->
    <div class="item  ">
   <blockquote class="blockquote">
  <p class="mb-0 tp">Lorem ipsum dolor sit amet, 
  consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Rajesh<cite title="Source Title">chand</cite></footer>
</blockquote>
  </div>
<!-- itemone end -->
    
    
  </div>
    
    

<!-- testomonial part end here -->

</div>
</div>

<!-- footer part -->

<div class="container-fluid  bg-dark footer" >
  
<div class="row text-center">
  <div class="animated slow rollIn social" >
  <a href="https://www.facebook.com/razesh10"><i class="fab fa-facebook fa-3x"></i></a>
   <a href=""><i class="fab fa-instagram-square fa-3x"></i></a>
   <a href=""><i class="fab fa-google-plus fa-3x"></i></a>
   <a href=""><i class="fab fa-youtube fa-3x"></i></a>
</div>
</div>



<div class="row  bg-dark text-center" >
  <p class="text-white text-capitalize mt2"> All  &#174;Right reserve to Buddha Digital</p>
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
.bgtest{background-color:rgba(168,50,149,0.4);}
.ourteam{background-color:rgba(168,50,149,0.8);}
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
</style>
<!-- footer end -->









<style>
  .des::first-letter{
    color: red;
    text-transform: uppercase;
    font-size: 1.4em;

  }
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
  
  /*  @media only screen and (max-width: 600px) {
  .mediaclide {
   margin-top: 150px;
  }
} */
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
    autoplayTimeout:1500,
    loop:true,
    margin:15,
    // nav:true,
    // items:3,
     responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },

        1000:{
            items:4,
            nav:true,
            loop:false
        }
      }
    
    
});
</script>
  </body>
</html>