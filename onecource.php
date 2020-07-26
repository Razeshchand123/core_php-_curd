<?php
include("nav.php");
$id=$_GET['id'];
$sql="SELECT * FROM megadata WHERE id='$id'";
$result=$conn->query($sql);
$row=$result->fetch(PDO::FETCH_ASSOC);

?>
<div class="container" style="margin-top:12%;">
  <div class="row">
    <h5 class="display-4">welcome</h5>
 </div>


 <div class="row ">
  <div class="col-sm-3">
  <h5 class="info">Title name:<span class="text-capitalize text-white direction"><?php echo $row['title']; ?></span></h5>
  <h5 class="info">cradit hour:<span class ="text-white">5hr</span></h5>
  <h5 class="info">author :<span class="text-capitalize text-white"><?php echo $row['aname']; ?></span></h5>
  
 </div>

  <div class="col-sm-3 text-center d-flex flex-column">
    <a href="">
      <i class="fab fa-youtube fa-10x text-warning"></i>
    </a>
<p class="ml-3 ">watch on youtube</p>
  </div>
   <div class="col-sm-3 text-center d-flex flex-column">
     <a href="<?php echo $row['data']; ?>" target="_blank"><i class="fas fa-cloud-download-alt fa-10x text-warning "></i></a>
  <p class="">downloadpdf</p>
  </div>
   <div class="col-sm-3 text-center d-flex flex-column">
    <a href="contect.php" target="_blank">
<i class="fas fa-question-circle fa-10x text-warning"></i>
    </a>
<p class="">help for you</p>
  </div>
</div>

<!-- socialicon -->
<div class="row justify-content-center">
  <nav class="animated slow rollIn ">
  <a href="https://www.facebook.com/razesh10"><i class="fab fa-facebook"></i></a>
   <a href=""><i class="fab fa-instagram-square "></i></a> 
   <a href=""><i class="fab fa-google-plus "></i></a>
   <a href=""><i class="fab fa-youtube"></i></a>
</nav>
</div>

</div>
<!-- //////// -->

<div class="container-fluid mt-5">
  <div class="row ">
    
    <div class="col-sm-7 m-auto mt-5 mb-5 myshadow">
  <h4 class="text-center text-capitalize"> <?php echo $row['title'] ?></h4>
  <p class="detail"><?php echo $row['pdetail'] ?></p>
  

    </div>
  </div>
</div>


<!-- //////// -->

<!-- footer part -->
<div class="container-fluid footer">
<div class="row m-3">
 <!--  <nav class="animated slow rollIn social" id="socialicon">
  <a href="https://www.facebook.com/razesh10"><i class="fab fa-facebook"></i></a>
   <a href=""><i class="fab fa-instagram-square "></i></a> 
   <a href=""><i class="fab fa-google-plus "></i></a>
   <a href=""><i class="fab fa-youtube "></i></a>
</nav> -->
</div>



<div class="row p-5 bg-dark text-center" >
  <p class="text-white text-capitalize"> all  &#174;right reserve to Rajesh chand</p>
  <a href="#" class="scrolltop">top</a>

  </div>
</div>



 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style type="text/css" media="screen">
      .detail::first-letter{color:red; text-transform:uppercase;font-size: 1.5em;}
      .direction{direction: rtl;}
      /* .footer{position: absolute;
        bottom: 0;} */
      body{
        background-color: rgba(0,0,0,0.5);
      }
    nav>a>i{
      font-size: 3em;
     text-shadow: 2px 1px 2px white;
        color:rgba(0,0,0,0.5);
        
    } 
     nav>a>i:hover{
      color:rgba(0,0,0,0.8);
    }  
    .info{
      font-variant: small-caps;
      text-transform: capitalize;
    }
    .info>span{
      padding-left: 1%;
      font-size: 20px;
      
    }
.myshadow{box-shadow:3px 2px 6px 4px white;}
.dimg{width:86%;}

    </style>
  </body>
</html>