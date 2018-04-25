<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "tourism");
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"tourism");



?>





<!DOCTYPE html>
<!--
Template Name: Arialogic
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="en-US">
<head>
<title>JM Sprinkler</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="layout/scripts/myjs.js"></script>
<link rel="stylesheet" type="text/css" href="layout/styles/mycss.css">
<script type="text/javascript" src="layout/scripts/bootstrap.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="layout/styles/newcss.css">
<link rel="stylesheet" type="text/css" href="layout/styles/emailpop.css">


<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="cs/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/styleg.css"> <!-- Resource style -->
  <script src="js/modernizr.js"></script> <!-- Modernizr -->



<link href='https://fonts.googleapis.com/css?family=Raleway:300,400' rel='stylesheet subresource' type='text/css'>
  
  <link rel='stylesheet prefetch' href='https://cdn.zekken.rocks/css/waves.css'>

      <link rel="stylesheet" href="css/stylemail.css">


<!-- Latest compiled JavaScript -->



<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" > 


  <!-- <div id="myCarousel" class="carousel container slide">
     <div class="carousel-inner">
        <div class="active item one"></div>
        <div class="item two"></div>
        <div class="item three"></div>
      </div>
   </div>-->
   <div id="myCarousel" style="z-index: -99 " class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner carousel ">
    <div class="item active one">
      <img style="height: 700px; width: 100%" src="images/Sri-Lanka-Tourism.jpg" alt="Los Angeles">
    </div>

    <div class="item carousel two">
      <img style="height: 700px; width: 100%" src="images/1.jpg" alt="Chicago">
    </div>

    <div class="item carousel three">
      <img style="height: 700px; width: 100%" src="images/t-of-the-t.jpg" alt="New York">
    </div>

     <div class="item carousel three">
      <img style="height: 700px; width: 100%" src="images/Sri-Lanka-Tours-Esala-Perahera.jpg" alt="New York">
    </div>
    <div class="item carousel three">
      <img style="height: 700px; width: 100%" src="images/perahera-02.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>
 <input type="checkbox" id="email-popup" onChange="this.blur()" />
<label for="email-popup" class="email animated waves-effect">
  <span class="icons animated">
    <svg class="email-icon animated" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="512px" height="384px" viewBox="0 0 512 384" enable-background="new 0 0 512 384" xml:space="preserve">
      <path d="M44.8,0h422.4C489.588,0,512,22.413,512,44.8v294.4c0,22.388-22.412,44.8-44.8,44.8H44.8C22.413,384,0,361.588,0,339.2V44.8  C0,22.413,22.413,0,44.8,0z M51.2,307.2c0,16.787,8.812,25.6,25.6,25.6h358.4c16.787,0,25.6-8.812,25.6-25.6V76.8L290,251.6  c-15.825,15.838-41.494,15.838-57.318,0L51.2,76.8V307.2z M89.6,51.2l150.244,150.25c11.875,11.875,31.119,11.875,42.994,0  L435.2,51.2H89.6z" />
    </svg>
    <svg class="pen-icon animated" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
      <g>
        <path fill="#020202" d="M422.953,176.019c0.549-0.48,1.09-0.975,1.612-1.498l21.772-21.772c12.883-12.883,12.883-33.771,0-46.654   l-40.434-40.434c-12.883-12.883-33.771-12.883-46.653,0l-21.772,21.772c-0.523,0.523-1.018,1.064-1.498,1.613L422.953,176.019z" />
        <polygon fill="#020202" points="114.317,397.684 157.317,440.684 106.658,448.342 56,456 63.658,405.341 71.316,354.683  " />
        <polygon fill="#020202" points="349.143,125.535 118.982,355.694 106.541,343.253 336.701,113.094 324.26,100.653 81.659,343.253    168.747,430.341 411.348,187.74  " />
      </g>
    </svg>
  </span>
</label>

<div class="mail animated">
  <div class="top-bar">
    <svg class="email-icon animated" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="512px" height="384px" viewBox="0 0 512 384" enable-background="new 0 0 512 384" xml:space="preserve">
      <path d="M44.8,0h422.4C489.588,0,512,22.413,512,44.8v294.4c0,22.388-22.412,44.8-44.8,44.8H44.8C22.413,384,0,361.588,0,339.2V44.8  C0,22.413,22.413,0,44.8,0z M51.2,307.2c0,16.787,8.812,25.6,25.6,25.6h358.4c16.787,0,25.6-8.812,25.6-25.6V76.8L290,251.6  c-15.825,15.838-41.494,15.838-57.318,0L51.2,76.8V307.2z M89.6,51.2l150.244,150.25c11.875,11.875,31.119,11.875,42.994,0  L435.2,51.2H89.6z"
      />
    </svg>
    <label for="email-popup" class="close-area animated"><span class="close"></span></label>
  </div>
  <input type="text" class="animated" placeholder="Your Subject" />
  <input type="email" class="animated" placeholder="Your Email" />
  <textarea name="message" id="message" cols="30" rows="8" class="animated" placeholder="Your Message"></textarea>
  <button class="animated waves-effect" type="submit" onclick="this.blur()">
    <span>Send</span>
  </button>
</div>
  <script src='https://cdn.zekken.rocks/js/addons/waves.js'></script>


  <!-- ################################################################################################ -->
  <div class="wrapper overlay">
    <header id="header" class="hoc clear" style="margin-top: 0px; padding-top: 10px;">
    

    <div class="wrapper row0" >
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul class="nospace inline pushright">
          <li><i class="fa fa-phone"></i> +94(0) 716 004 845</li>
          <li><i class="fa fa-envelope-o"></i> info@anrotravelers.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="faico clear nospace inline pushright">
          <li><a class="faicon-facebook" href="https://www.facebook.com/jmsprinkler/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-pinterest" href="#"><i class="fa fa-tripadvisor"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>

          <?php
             if(isset($_SESSION['logged_in'])){

                 if ($_SESSION['logged_in']){
          ?>
          <li style="border-left: 2px solid white; "><a class="faicon-rss" href="pages/logout.php"><i style="padding-left: 10px;">Logout</i></a></li>
          <?php
              }
           }else{
          ?>
          <!--<li style="border-left: 2px solid white; "><a class="faicon-rss" href="pages/admin_login.php"><i style="padding-left: 10px;">Admin</i></a></li>-->

            <li class="dropdown" style="border-left: 2px solid white;">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i style="padding-left: 10px;">Admin</i> <strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 20px;">
              <form method="post" action="index.php" accept-charset="UTF-8" style="color: black">
                <label style="color: black"><b>Admin Login</b></label>
                <input style="margin-bottom: 15px;" type="text" placeholder="Admin" id="username" name="admin_name">
                <input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
               <!-- <input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
                <label class="string optional" for="user_remember_me"> Remember me</label>-->
                <input name="submit1" class="btn btn-default btn-block" type="submit" id="sign-in" value="Sign In">
                <?php
  if(isset($_POST["submit1"]))
  {
  
  
  $res=mysqli_query($connect,"select * from admin_login where admin_name='$_POST[admin_name]' && password='$_POST[password]'");
  while($row=mysqli_fetch_array($res))
  {
  $_SESSION["admin"]=$row["admin_name"];
  $_SESSION['logged_in'] = true;
  ?>
  <script type="text/javascript">
  window.location="index.php";
  </script>
  <?php 
  }
  
  
  
  
  }
  
  ?>
    
                <!--<label style="text-align:center;margin-top:5px">or</label>
                                <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">-->
              </form>
            </div>
          </li>




          <?php
            }
          ?>

        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
      <nav id="mainav" class="clear"> 
        <!-- ################################################################################################ -->

        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="drop" href="#">Tour Packages </a>
            <ul>
              <li><a href="#"  ><button style="background: transparent; border: none;" type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_9">1 Day Package</button></a></li>
               <li><a href="#"  ><button style="background: transparent; border: none;" type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_10">2 Day Package</button></a></li>
               <li><a href="#"  ><button style="background: transparent; border: none;" type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_11">3 Day Package</button></a></li>
                <li><a href="#"  ><button style="background: transparent; border: none;" type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_12">5 Day Package</button></a></li>
                 <li><a href="#"  ><button style="background: transparent; border: none;" type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_13">7 Day Package</button></a></li>
             <!-- <li><a href="pages/full-width.html">2 Day Package</a></li>
              <li><a href="pages/sidebar-left.html">3 Day Package</a></li>
              <li><a href="pages/sidebar-right.html">5 Day Package</a></li>
              <li><a href="pages/basic-grid.html">7 Day Package</a></li>-->
            </ul>
          </li>
          <li><a class="drop" href="#">Gallery</a>
            <ul>
              <li><a href="#"  ><button style="background: transparent; border: none;" type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_18">Culture</button></a></li>
              <li><a href="#nature"  ><button style="background: transparent; border: none;" type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_18">Nature</button></a></li>
              <li><a href="#bird"  ><button style="background: transparent; border: none;" type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_18">Birds</button></a></li>
             
            </ul>
          </li>
          <li><a href="#footer">Drop us an E-mail</a></li>
          <li><a href="#reviews">Reviews</a></li>
          <li><a href="#"  ><button style="background: transparent; border: none;" type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_15">About Us</button></a></li>
          <li><a href="#"  ><button style="background: transparent; border: none;" type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_14">Contact Us</button></a></li>
          <li></div></li>
          <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<br>
        </ul>
        <!-- ################################################################################################ -->
      </nav>
      <div id="logo"> 
        <!-- ################################################################################################ -->
        <div class="row">
          <img style="width: 150px; height: 70px; margin-right: 0px; padding: 0px;" class="pull-left" src="Presentation1.jpg">
        <h1 ><a href="index.html" style="letter-spacing: 3px;text-align: center; padding-right: 80px;">ANRO Travelers<!--JM Sprinkler--></a></h1>
        <p style="padding-right: 80px;" ?>We Take You To The Nature</p>
        <div class="pull-right " id="google_translate_element">
        </div>
        <!-- ################################################################################################ -->
      </div>
    </header>
  </div>

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <div class="introtxt">
        <p class="font-xs nospace">Laoreet tellus quis finibus metus</p>
        <h2 class="heading">Welcome To ANRO Travelers <!--JM Sprinkler--></h2>
        <p>Travel today.. Collect Your memories.. Enjoy Your life</p>
      </div>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn inverse" href="#"  ><button style="background: transparent; padding: 0px; border: none; " type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_16">Feed Back</button></a></li>
          <li><a class="btn " href="#"  ><button style="background: transparent; padding: 0px; border: none; " type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal_17">More about Us</button></a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">Top 10 Places to Visit in Sri Lanka</h2>
      <p>Potenti nam aliquet varius dolor ut lobortis morbi sit amet rutrum nunc cras imperdiet consequat eros nec efficitur sed placerat lacus orci sed eleifend odio aliquam vitae etiam imperdiet feugiat nisl non accumsan ante eleifend.</p>
    </div>
    <ul class="nospace group blocks">
      <li class="one_quarter first bgded overlay" style=" background-image:url('images/colombo.jpg'); background-size: cover;"><button type="button" class="btn btn-info medium" data-toggle="modal" data-target="#myModal_1">Colombo</button><br>
        Ultrices</li>
      <li class="one_quarter bgded overlay" style="background-image:url('images/galle.jpg');background-size: cover;"><button type="button" class="btn btn-info medium" data-toggle="modal" data-target="#myModal_2">Galle</button><br>
        Posuere</li>
      <li class="one_quarter bgded overlay" style="background-image:url('images/anuradhapuraya.jpg');background-size: cover;"><button type="button" class="btn btn-info medium" data-toggle="modal" data-target="#myModal_3">Anuradhapuraya</button><br>
        Cubilia</li>
      <li class="one_quarter bgded overlay" style="background-image:url('images/Polonnaruwa.jpg');background-size: cover;"><button type="button" class="btn btn-info medium" data-toggle="modal" data-target="#myModal_4">Polonnaruwa</button><br>
        Convallis</li>
      <li class="one_quarter first bgded overlay" style="background-image:url('images/368px-Jaffna_library.jpg'); background-size: cover; margin-top: 25px;"><button type="button" class="btn  btn-info medium" data-toggle="modal" data-target="#myModal_5">Jaffna</button><br>
      Ultrices</li>
       <li class="one_quarter bgded overlay" style="background-image:url('images/Things-to-do-in-Trincomalee-Sri-Lanka-koneswaram-temple.jpg'); background-size: cover; margin-top: 25px;"><button type="button" class="btn btn-info medium" data-toggle="modal" data-target="#myModal_6">Trincomalle</button><br>
        Posuere</li>
       <li class="one_quarter bgded overlay" style="background-image:url('images/1455709600batticaloa2.jpg'); background-size: cover; margin-top: 25px;"><button type="button" class="btn btn-info medium" data-toggle="modal" data-target="#myModal_7">Batticoloa</button><br>
        Posuere</li>
       <li class="one_quarter bgded overlay" style="background-image:url('images/kandy-slide1.jpg'); background-size: cover; margin-top: 25px;"><button type="button" class="btn btn-info medium" data-toggle="modal" data-target="#myModal_8">Kandy</button><br>
        Posuere</li>
   
     
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="row">
<div class="col-md-7">
<div  id="map" style="width:600px;height:400px; margin: 20px;">

<script>
function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(6.9271, 79.8612),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDex9EK5-5jcPiooMpOmTdChmktqOMJ6mg&callback=myMap"></script>
</div>
<div style="margin: 20px;">

<a href="https://info.flagcounter.com/MchS"><img src="https://s11.flagcounter.com/count2/MchS/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
</div>

</div>
<!--<div class="col-md-5" style="padding: 10px;">
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FJmsprinkler-tours-241370172958921%2F&tabs=timeline&width=600&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="600" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
  
</div>-->
</div>


<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
   
    <div class="center btmspace-50">
      <h2 class="heading">Latest News on Tourism</h2>
      <p>Fringilla nisi ut arcu facilisis gravida nullam bibendum nisi risus id viverra felis pharetra eu donec ut lorem risus nullam iaculis lacinia massa et accumsan urna laoreet fermentum etiam ipsum enim bibendum id varius.</p>
    </div>
    <ul class="nospace elements">
    <div class="row" style=" height: 1150px;overflow: scroll;">	
    <?php

         $query2 = "SELECT * FROM posts ORDER BY postid DESC ";
                        $result2 = mysqli_query($connect, $query2);
                        if(mysqli_num_rows($result2) > 0)
                        {
                          while($row2 = mysqli_fetch_array($result2))
                            {

                            
    ?>
     
      
      <li class="" id="one_third" style="display:inline-block; float:left; margin:0 0 0 15px; list-style:none;width:305px; height: ">
        <div class="thumbnail" >
        <form method="post" action="">
        <article><a href="#"><div class="item"><img id="img1" src="<?php echo $row2["image"] ?>" alt=""></div></a>
          <div class="txtwrap">
            <h6 class="heading"><?php echo $row2["headline"] ?></h6>
            <time datetime="2045-04-06"><?php echo $row2["date"] ?></time>
            <p ><div id="div1"><?php echo $row2["postdes"] ?>&hellip;</div></p>
            <footer><a style="color: black" href="#"  ><button style="background: transparent; border: none; color: black" type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#<?php echo $row2["postid"]; ?>">Read More &raquo;</button></a></footer>
              <input type="hidden" name="hidden_postid" value="<?php echo $row2["postid"]; ?>">
                <div class="modal " id="<?php echo $row2["postid"]; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $row2["headline"] ?></h4>
        </div>
        <div>
          <p><img  style="height: 400px; width: 100%" src="<?php echo $row2["image"] ?>"></p>
        </div>
        <div class="modal-body">
          <p><?php echo $row2["postdes"] ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
              
          </div>
       
           <?php
             if(isset($_SESSION['logged_in'])){

                 if ($_SESSION['logged_in']){
          ?>
            <input class="pull-left" type="submit" name="delete_post" value="Delete Post" >
            <input class="pull-right" type="submit" name="edit_post" value="Edit Post" >
            

            <?php
if(isset($_POST["delete_post"]))
{

mysqli_query($link,"delete from posts where postid = $_POST[hidden_postid] ");
echo '<script>window.location="index.php"</script>';


}

?>              
 </article>
</form>
</div>
           
            <?php 
               }
              }
          ?>



      </li>
       <?php 
               }
              }
          ?>

      </div>
  </ul>

          <?php
             if(isset($_SESSION['logged_in'])){

                 if ($_SESSION['logged_in']){
          ?>

          <?php
          if(isset($_POST["edit_post"])){
          $sql = "SELECT * FROM posts WHERE postid=$_POST[hidden_postid]";
          $result_edit = mysqli_query($connect,$sql) ;        
          # retrieved by using $row['col_name']
          $row_edit = mysqli_fetch_array($result_edit);
          }
          ?>
          

          <div class="row">
        
             <div class="col-md-12" style="padding: 30px;">
              
    <h2 class="heading" style="text-align: center;">Enter a new Post</h2>
  
       <form method="post" action="index.php" enctype="multipart/form-data">
      <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Heading</label>
          <div class="col-10">
            <input class="form-control" type="text" name="headlinep" <?php if(isset($_POST["edit_post"])) {?> value="<?php echo $row_edit["headline"] ?>" <?php } ?> placeholder="John" id="example-text-input">
          </div>
      </div>
      <div class="form-group row">
        <label for="exampleInputFile">File input</label>
         <input type="file" name="imagep" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Choose the best picture which depitcs the whole idea about the article</small>
          </div>

      <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Date of the Post</label>
            <div class="col-10">
              <input class="form-control" <?php if(isset($_POST["edit_post"])) {?> value="<?php echo $row_edit["date"] ?>"<?php } ?> type="date" placeholder="dd/mm/yyyy" name="datep" id="example-date-input">
             </div>
      </div>

      

      <div class="form-group row">
          <label for="exampleTextarea">Write the Post here Here</label>
          <textarea class="form-control"  name="postdes" id="exampleTextarea" rows="5"><?php if(isset($_POST["edit_post"]))  echo $row_edit["postdes"] ?></textarea>
      </div>
       <input type="hidden" name="hidden_postid2" value="<?php if(isset($_POST["edit_post"]))  echo $row_edit["postid"]; ?>">

         <button type="submit" name="addpost" class="btn btn-default" ><b>Post the Article</b></button>
         <button type="submit" name="updatepost" class="btn btn-default" ><b>Update the Article</b></button>

           </form>
         

           <?php
if(isset($_POST["addpost"]))
{
   $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   $fnm=$_FILES["imagep"]["name"];
   $dst="./images/admin/".$v3.$fnm;
   $dst1="images/admin/".$v3.$fnm;
   move_uploaded_file($_FILES["imagep"]["tmp_name"],$dst);



mysqli_query($connect,"insert into posts(headline,image,date,postdes) values('$_POST[headlinep]','$dst1','$_POST[datep]','$_POST[postdes]')");
echo '<script>window.location="index.php"</script>';

}

if(isset($_POST["updatepost"]))
{
   $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   $fnm=$_FILES["imagep"]["name"];
   $dst="./images/admin/".$v3.$fnm;
   $dst1="images/admin/".$v3.$fnm;
   move_uploaded_file($_FILES["imagep"]["tmp_name"],$dst);



mysqli_query($connect,"UPDATE posts SET headline = '$_POST[headlinep]',  date ='$_POST[datep]', postdes='$_POST[postdes]' WHERE postid=$_POST[hidden_postid2] ");
echo '<script>window.location="index.php"</script>';

}



?>                    
              </div>
          </div>
          <?php
        }

       }
       ?> 




      <!--<li class="one_thir" id="one_third"  style="display:inline-block; float:left; margin:0 0 0 4px; list-style:none;width:31%;">
        <article><a href="#"><img src="images/demo/320x220.png" alt=""></a>
          <div class="txtwrap">
            <h6 class="heading">Vivamus sit amet</h6>
            <time datetime="2045-04-05">5<sup>th</sup> April 2045</time>
            <p>Sagittis in aenean porta semper tortor vel blandit magna integer ac&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_thi" id="one_third">
        <article><a href="#"><img src="images/demo/320x220.png" alt=""></a>
          <div class="txtwrap">
            <h6 class="heading">Pulvinar nisl non</h6>
            <time datetime="2045-04-04">4<sup>th</sup> April 2045</time>
            <p>Neque malesuada euismod proin sit amet nisl velit mauris orci nisl&hellip;</p>
            <footer><a style="color: black" href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>-->
    </ul>
   

   
    <!-- ################################################################################################ -->
   
  
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="row" style="margin-left: auto; margin-right: auto;">
<div class="col-md-4" style="padding-top: 10px;">
<iframe width="420" height="345" src="https://www.youtube.com/embed/96yLr3Vt9JA">
</iframe>
</div>
<div class="col-md-4" style="padding-top: 10px;">
  <iframe width="420" height="345" src="https://www.youtube.com/embed/DtJSJZzHyB4">
</iframe>
</div>
<div class="col-md-4" style="padding-top: 10px;">
  <iframe width="420" height="345" src="https://www.youtube.com/embed/C3iLyLdEc9Y">
</iframe>
</div>
</div>



<div id="reviews" class="bgded overlay" style="background-image:url('images/Srilanka.jpg'); margin: 20px; overflow: hidden; background-size: cover;"> 
 
  <section id="testimonials" class="hoc container clear" style="margin-left: auto; margin-right: auto;"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">Reviews</h2>
      <p>We love to hear what you say about us, Do not hesitate to to tell what you really feel </p>
    </div>

 <div class="row">
  <div class="col-md-8" style="margin: 0px; padding: 0px;  height: 600px;overflow: scroll;">
    <ul class="nospace group"  >

    <?php


     $query = "SELECT * FROM reviews ";
                        $result = mysqli_query($connect, $query);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row = mysqli_fetch_array($result))
                            {

                            $revid = $row["revid"];
    ?>


    
      <li class="one_half first" style="margin-top: 20px;">
        <div class="clear">
           <form method="post" action="">
        <img src=" <?php echo $row["image"] ?> " alt="" style="width: 80px; height:80px;"> <span class="block"><strong><?php echo $row["name"] ?></strong> / <em><?php 
    for ($x = 0; $x <$row["rate"]; $x++) {
    ?>
    <i class=" fa fa-star"> </i>
    <?php 
} 
?></em></span>
        
          <h4> <?php echo $row["headline"] ?>  </h4>
          <blockquote style="font-size: 15px;"><?php echo $row["review"] ?>&hellip;</blockquote>
          
          <p><em>on <?php echo $row["date"] ?></em></p>
           <input type="hidden" name="hidden_revid" value="<?php echo $row["revid"]; ?>">
          <?php
             if(isset($_SESSION['logged_in'])){

                 if ($_SESSION['logged_in']){
          ?>
            <input type="submit" name="delete_review" value="Delete Review" >
            </form>
            <?php
if(isset($_POST["delete_review"]))
{

mysqli_query($link,"delete from reviews where revid = $_POST[hidden_revid] ");
echo '<script>window.location="index.php"</script>';


}

?>              

           
            <?php 
               }
              }
          ?>

        </div>
      </li>
      <!--<li class="one_half">
        <div class="clear"><img src="images/default-user.png" style="width: 80px; height:80px;" alt=""> <span class="block"><strong>B.Doe</strong> / <em>Position, Company Name</em></span>
          <blockquote>Ac ante ipsum primis in faucibus curabitur cursus est nec turpis posuere aliquet&hellip;</blockquote>
        </div>
      </li>-->
   
    <?php 
        }
      }
     ?>
      </ul>
      </div>
    <!-- ################################################################################################ -->
    <div class="col-md-4" style="padding-left: 30px;">
    <h2 class="heading" style="text-align: center;">Enter your review here</h2>
    <form method="post" action="index.php" enctype="multipart/form-data">

      <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Name</label>
          <div class="col-10">
            <input class="form-control" type="text" name="name" placeholder="John" id="example-text-input">
          </div>
      </div>
      <div class="form-group row">
          <label for="example-email-input" class="col-2 col-form-label">Email</label>
          <div class="col-10">
            <input class="form-control" type="email" name="email" placeholder="someone@example.com" id="example-email-input">
          </div>
      </div>

    <!--  <div class="form-group row">
        <label for="exampleInputFi">File input</label>
        <div>
         <input type="file" name="imgreview" class="form-control-file" id="exampleInputFi">
       </div>
          </div>-->

      <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Date You Visited</label>
            <div class="col-10">
              <input class="form-control" type="date" placeholder="dd/mm/yyyy" name="date" id="example-date-input">
             </div>
      </div>

       <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Heading</label>
          <div class="col-10">
            <input class="form-control" type="text" name="headline" placeholder="Headline" id="example-text-input">
          </div>
      </div>

      <div class="form-group row">
          <label for="exampleTextarea">Leave Your Review Here</label>
          <textarea class="form-control" name="review" id="exampleTextarea" rows="3"></textarea>
      </div>

      <div class="row">
        <label class="col-md-5">Rate Us</label>
        <div class="form-check form-check-inline col-md-1 ">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="rate" id="inlineRadio1" value="1"> 1
          </label>
        </div>
        <div class="form-check form-check-inline col-md-1">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="rate" id="inlineRadio2" value="2"> 2
          </label>
        </div>
        <div class="form-check form-check-inline col-md-1 ">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="rate" id="inlineRadio3" value="3" > 3
          </label>
        </div>
        <div class="form-check form-check-inline col-md-1 ">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="rate" id="inlineRadio4" value="4" > 4
           </label>
        </div>
        <div class="form-check form-check-inline col-md-1">
         <label class="form-check-label">
            <input class="form-check-input" type="radio" name="rate" id="inlineRadio5" value="5" > 5
        </label>
        </div>

      </div>
      <button type="submit" name="addreview" class="btn btn-default" ><b>Post Your Review</b></button>
      
    </form> 
    <?php
if(isset($_POST["addreview"]))
{

 /* $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   if(isset($_FILES['imgreview'])){
      echo "afgdfvagsdgaysgdyagsdga ashdvasdvahsd ahks dahdvahvdaedyagd";
   }
   $fnm=$_FILES["imgreview"]["name"];
   $dst="./images/admin/".$v3.$fnm;
   $dst1="images/admin/".$v3.$fnm;
   move_uploaded_file($_FILES["imgreview"]["tmp_name"],$dst) or die ("Failure to upload content");*/

   

mysqli_query($connect,"insert into reviews(name,email,image,date,headline,review,rate) values('$_POST[name]','$_POST[email]','$dst1','$_POST[date]','$_POST[headline]','$_POST[review]',$_POST[rate])");
echo '<script>window.location="index.php"</script>';


}

?>                  


    </div>
  </div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper coloured">
  <div class="hoc clear"> 
    <!-- ################################################################################################ -->
    <figure id="logos">
      <ul class="nospace group">
        <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
        <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
        <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
        <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
        <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
      </ul>
      <figcaption class="hidden"><a class="btn small" href="#">More &raquo;</a></figcaption>
    </figure>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Keep in touch</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i>+94(0) 716 004 845<br>
          +94(0) 71 534 1291</li>
        <li><i class="fa fa-fax"></i> +94(0) 11 223 8272</li>
        <li><i class="fa fa-envelope-o"></i> info@jmsprinkler-tours.com</li>
        <li><i class="fa fa-envelope-o"></i> ranjith40@yahoo.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Nibh aenean lacinia</h6>
      <ul class="nospace linklist">
        <li><a href="#">Mattis est suscipit posuere</a></li>
        <li><a href="#">Nunc lacus sodales urna nec</a></li>
        <li><a href="#">Fermentum ipsum augue id</a></li>
        <li><a href="#">Ex laoreet urna sollicitudin</a></li>
        <li><a href="#">Luctus nulla vitae tincidunt</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Suscipit magna sed</h6>
     
      <form method="post" action="#">
        <fieldset>
          
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <textarea style="width: 222px;" class="btmspace-15" rows="5"></textarea>
          <button type="submit" value="submite">Submit</button>
        </fieldset>
      </form>

      <?php 
      if(isset($_POST["submite"])){

        $to = "pubuduboteju95@gmail.com";
        $subject = "My subject";
        $txt = "Hello world!";
        $headers = "From: webmaster@example.com" . "\r\n" .
        "CC: somebodyelse@example.com";

        mail($to,$subject,$txt,$headers);
        
      }


       ?>
    </div>
    <div class="one_quarter">
      <h6 class="title">Sed elit nullam</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Scelerisque lacus </a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">A metus luctus quis hendrerit sed vel elit ac mauris facilisis&hellip;</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Vehicula tortor</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thirsday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">Ornare elit sed quam ultricies non rhoncus mauris ornare&hellip;</p>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Powered by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">Software Engineering-University of Kelaniya</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>

<a style="color:#FFFFFF; background-color:#282323;" id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

      <!-- Modal -->
  <div class="modal " id="myModal_1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Colombo</h4>
        </div>
        <div>
          <p><img style="height: 400px; width: 100%" src="images/colombo.jpg"></p>
        </div>
        <div class="modal-body">
          <p>Colombo (Sinhala: කොළඹ Kolamba, pronounced [ˈkəlɐmbɞ]; Tamil: கொழும்பு) is the commercial capital[3] and largest city of Sri Lanka. According to the Brookings Institution, Colombo metropolitan area has a population of 5.6 million,[4][5][6][7][8] and 752,993[2] in the city proper. It is the financial centre of the island and a popular tourist destination. It is located on the west coast of the island and adjacent to the Greater Colombo area which includes Sri Jayawardenepura Kotte, the legislative capital of Sri Lanka and Dehiwala-Mount Lavinia. Colombo is often referred to as the capital since Sri Jayawardenepura Kotte is within the urban area of, and a suburb of, Colombo. It is also the administrative capital of Western Province, Sri Lanka and the district capital of Colombo District. Colombo is a busy and vibrant place with a mixture of modern life and colonial buildings and ruins.[9] It was the legislative capital of Sri Lanka until 1982.</p>

<p>Due to its large harbour and its strategic position along the East-West sea trade routes, Colombo was known to ancient traders 2,000 years ago. It was made the capital of the island when Sri Lanka was ceded to the British Empire in 1815,[10] and its status as capital was retained when the nation became independent in 1948. In 1978, when administrative functions were moved to Sri Jayawardenepura Kotte, Colombo was designated as the commercial capital of Sri Lanka.</p>

<p>Like many cities, Colombo's urban area extends well beyond the boundaries of a single local authority, encompassing other municipal and urban councils such as Sri Jayawardenepura Kotte Municipal Council, Dehiwala Mount Lavinia Municipal Council, Kolonnawa Urban Council, Kaduwela Municipal Council and Kotikawatte Mulleriyawa Pradeshiya Sabha. The main city is home to a majority of Sri Lanka's corporate offices, restaurants and entertainment venues.[11] Famous landmarks in Colombo include Galle Face Green, Viharamahadevi Park, Beira Lake, Colombo Racecourse, Planetarium, University of Colombo, Mount Lavinia beach, Nelum Pokuna Theatre, Colombo Lotus Tower (under construction) as well as the National Museum.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <div class="modal " id="myModal_2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Galle</h4>
        </div>
        <div>
          <p><img  style="height: 400px; width: 100%" src="images/galle.jpg"></p>
        </div>
        <div class="modal-body">
          <p>Galle (Sinhalese: ගාල්ල; Tamil: காலி) is a major city in Sri Lanka, situated on the southwestern tip, 119 km from Colombo. Galle is the administrative capital of Southern Province, Sri Lanka and is the district capital of Galle District.</p>

<p>Galle was known as Gimhathiththa[1](although Ibn Batuta in the 14th century refers to it as Qali[2]) before the arrival of the Portuguese in the 16th century, when it was the main port on the island. Galle reached the height of its development in the 18th century, during the Dutch colonial period. Galle is the best example of a fortified city built by the Portuguese in South and Southeast Asia, showing the interaction between Portuguese architectural styles and native traditions. The city was extensively fortified by the Dutch during the 17th century from 1649 onwards. The Galle fort is a world heritage site and is the largest remaining fortress in Asia built by European occupiers.</p>

<p>Other prominent landmarks in Galle include the city's natural harbor, the National Maritime Museum, St. Mary's Cathedral founded by Jesuit priests, one of the main Shiva temples on the island, and Amangalla, the historic luxury hotel. On 26 December 2004, the city was devastated by the massive tsunami caused by the 2004 Indian Ocean earthquake, which occurred off the coast of Indonesia a thousand miles away. Thousands were killed in the city alone. Galle is home to the Galle International Stadium, which is considered to be one of the most picturesque cricket grounds in the world.[3] The ground, which was severely damaged by the tsunami, was rebuilt and test matches resumed there on 18 December 2007.</p>

<p>Important natural geographical features in Galle include Rumassala in Unawatuna, a large mound-like hill that forms the eastern protective barrier to Galle Harbour. Local tradition associates this hill with some events of Ramayana, one of the great Hindu epics. The major river in the area is the Gin River (Gin Ganga), which begins from Gongala Kanda, passes villages such as Neluwa, Nagoda, Baddegama, Thelikada and Wakwella, and reaches the sea at Ginthota. The river is bridged at Wakwella by the Wakwella Bridge.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <div class="modal " id="myModal_3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Anuradhapuraya</h4>
        </div>
        <div>
          <p><img  style="height: 400px; width: 100%" src="images/anuradhapuraya.jpg"></p>
        </div>
        <div class="modal-body">
          <p>Anuradhapura (Sinhalese: අනුරාධපුරය ; Tamil: அனுராதபுரம்) is a major city in Sri Lanka. It is the capital city of North Central Province, Sri Lanka and the capital of Anuradhapura District. Anuradhapura is one of the ancient capitals of Sri Lanka, famous for its well-preserved ruins of an ancient Sri Lankan civilization. It was the third capital of the Kingdom of Rajarata, following the kingdoms of Tambapanni and Upatissa Nuwara.</p>

<p>The city, now a UNESCO World Heritage Site, was the centre of Theravada Buddhism for many centuries. The city lies 205 km (127 mi) north of the current capital Colombo in the North Central Province, on the banks of the historic Malvathu Oya. It is one of the oldest continuously inhabited cities in the world and one of the eight World Heritage Sites of Sri Lanka.</p>

<p>It is believed that from the fourth century BC until the beginning of the 11th century AD it was the capital of the Sinhalese.During this period it remained one of the most stable and durable centres of political power and urban life in South Asia. The ancient city, considered sacred to the Buddhist world, is today surrounded by monasteries covering an area of over sixteen square miles (40 km²).</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <div class="modal " id="myModal_4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Poḷonnaruwa</h4>
        </div>
        <div>
          <p><img  style="height: 400px; width: 100%" src="images/Polonnaruwa.jpg"></p>
        </div>
        <div class="modal-body">
          <p>Poḷonnaruwa (Sinhalese: පොළොන්නරුව, Poḷonnaruwa or Puḷattipura, Tamil: பொலன்னறுவை, Polaṉṉaṟuvai or Puḷatti nakaram) is the main town of Polonnaruwa District in North Central Province, Sri Lanka. Kaduruwela area is the Polonnaruwa New Town and the other part of Polonnaruwa remains as the royal ancient city of the Kingdom of Polonnaruwa.</p>

<p>The second most ancient of Sri Lanka's kingdoms, Polonnaruwa was first declared the capital city by King Vijayabahu I, who defeated Chola invaders in 1070 to reunite the country once more under a local leader.</p>

<p>The Ancient City of Polonnaruwa has been declared a World Heritage Site.[2]</p>

<p>Currently the new Polonnaruwa is undergoing a major development project known as the "Awakening of Polonnaruwa" under the concept of President Maithripala Sirisena. It envisions the development of all sectors in Polonnaruwa including roads, electricity, agriculture, education, health and environment will be developed comprehensively.[3]</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <div class="modal " id="myModal_5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Jaffna</h4>
        </div>
        <div>
          <p><img style="height: 400px; width: 100%" src="images/368px-Jaffna_library.jpg"></p>
        </div>
        <div class="modal-body">
          <p>Jaffna (Tamil: யாழ்ப்பாணம் Yāḻppāṇam, Sinhalese: යාපනය Yāpanaya) is the capital city of the Northern Province of Sri Lanka. It is the administrative headquarters of the Jaffna district located on a peninsula of the same name. With a population of 88,138, Jaffna is Sri Lanka's 12th largest city.[1] Jaffna is approximately six miles (9.7 kilometres) from Kandarodai which served as an emporium in the Jaffna peninsula from classical antiquity. Jaffna's suburb Nallur served as the capital of the four-century-long medieval Jaffna kingdom. Prior to the Sri Lankan civil war, it was Sri Lanka's second most populated city after the commercial capital Colombo. The 1980s insurgent uprising led to extensive damage, expulsion of part of the population, and military occupation. Since the end of civil war in 2009, refugees and internally displaced people have started to return to their homes and government and private sector reconstruction has begun.[2]</p>

<p>Historically, Jaffna has been a contested city. It was made into a colonial port town during the Portuguese occupation of the Jaffna peninsula in 1619 who lost it to the Dutch, only to lose it to the British in 1796. And during the post-Independence civil war the rebel Liberation Tigers of Tamil Eelam (LTTE) occupied Jaffna in 1986. The Indian Peace Keeping Force (IPKF) briefly occupied the city in 1987. The LTTE again occupied the city from 1989 until 1995, when the Sri Lankan military regained control.</p>

<p>The majority of the city’s population are Sri Lankan Tamils with a significant number of Sri Lankan Moors, Indian Tamils and other ethnic groups present in the city prior to the civil war. Most Sri Lankan Tamils are Hindus followed by Christians, Muslims and a small Buddhist minority. The city is home to number of educational institutions established during the colonial and post-colonial period. It also has number of commercial institutions, minor industrial units, banks, hotels and other government institutions. It is home to many historical sites such as the popular Jaffna library that was burnt down and rebuilt and the Jaffna fort rebuilt during the Dutch </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <div class="modal " id="myModal_6" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Trincomalee</h4>
        </div>
        <div>
          <p><img src="images/Things-to-do-in-Trincomalee-Sri-Lanka-koneswaram-temple.jpg"></p>
        </div>
        <div class="modal-body">
          <p>Trincomalee (English: /ˌtrɪŋkoʊməˈliː/; Tamil: திருகோணமலை Tirukōṇamalai; Sinhalese: ත්‍රිකුණාමළය Trikuṇāmalaya) also known as Gokanna,[1] is the administrative headquarters of the Trincomalee District and major resort port city of Eastern Province, Sri Lanka. Located on the east coast of the island overlooking the Trincomalee Harbour, 113 miles south of Jaffna and 69 miles north of Batticaloa, Trincomalee has been one of the main centres of Sri Lankan Tamil language speaking culture on the island for over two millennia. With a population of 99,135,[2] the city is built on a peninsula of the same name, which divides its inner and outer harbours. People from Trincomalee are known as Trincomalians and the local authority is Trincomalee Urban Council. Trincomalee city is home to the famous Koneswaram temple alluded to in its historic Tamil name Thirukonamalai and is home to other historical monuments such as the Bhadrakali Amman Temple, Trincomalee, the Trincomalee Hindu Cultural Hall and, opened in 1897, the Trincomalee Hindu College. Trincomalee is also the site of the Trincomalee railway station and an ancient ferry service to Jaffna and the south side of the harbour at Muttur.</p>
          <p>
            The recorded history of Trincomalee spans more than two and a half thousand years, beginning with civilian settlement associated with the Koneswaram temple in the pre-modern era. One of the oldest cities in Asia, it has served as a major maritime seaport in the international trading history of the island with South East Asia. In the ancient world, it was successively the capital of eastern kingdoms of the Vanni country, developing under the Anuradhapura Kingdom, Pallava Dynasty, Chola Dynasty, Pandyan Dynasty, the Vannimai chieftaincies and the Jaffna kingdom through the Koneswaram shrine's revenue. Trincomalee's urbanization continued when made into a fortified port town following the Portuguese conquest of the Jaffna kingdom, changing hands between the Danish in 1620, the Dutch, the French following a battle of the American Revolutionary War and the British in 1795, being absorbed into the British Ceylon state in 1815. The city's architecture shows some of the best examples of interaction between native and European styles. Attacked by the Japanese as part of the Indian Ocean raid during World War II in 1942, the city and district were affected after Sri Lanka gained independence in 1948, when the political relationship between Tamil and Sinhalese people deteriorated, erupting into civil war. It is home to major naval and air force bases at the Trincomalee Garrison. The city also has the largest Dutch fort on the island.
          </p>
          <P>
            The Trincomalee Bay Harbour, bridged by the Mahavilli Ganga River to the south, is referred to as "Gokarna" in Sanskrit, meaning "Cow's Ear", akin to several areas of Siva worship across the Indian subcontinent. Its sacred status to the Hindus has led to the city being declared "Dakshina-Then Kailasam" or "Mount Kailash of the South" and the "Rome of the Pagans of the Orient". The harbour is renowned for its large size and security; unlike any other in the Indian Ocean, it is accessible in all weathers to all craft. It has been described as the "finest harbour in the world" and by the British, "the most valuable colonial possession on the globe, as giving to our Indian Empire a security which it had not enjoyed from elsewhere". Popular tourist destinations include its beaches at Uppuveli, Salli and Nilaveli, used for temple visits, surfing, scuba diving, fishing and whale watching, and the Kanniya Hot Springs. Trincomalee is served by a campus of the Eastern University, Sri Lanka and has been the inspiration of both domestic and international poetry, films, music and literature for many centuries.
          </P>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <div class="modal " id="myModal_7" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Batticaloa</h4>
        </div>
        <div>
          <p><img src="images/1455709600batticaloa2.jpg"></p>
        </div>
        <div class="modal-body">
          <p>
            Batticaloa (Tamil: மட்டக்களப்பு, Maṭṭakkaḷappu; Sinhalese: මඩකලපුව, Madakalapuwa) is a major city in the Eastern Province, Sri Lanka, and its former capital. It is the administrative capital of the Batticaloa District. The city is the seat of the Eastern University of Sri Lanka and is a major commercial city. It is on the east coast, 69 miles (111 km) south of Trincomalee, and is situated on an island. Pasikudah is popular tourist destinations situated 35 km northwest with beaches and flat year-round warm-water shallow-lagoons.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <div class="modal " id="myModal_8" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Kandy</h4>
        </div>
        <div>
          <p><img src="images/kandy-slide1.jpg"></p>
        </div>
        <div class="modal-body">
          <p>Kandy (Sinhalese: මහනුවර Mahanuwara, pronounced [mahanuʋərə]; Tamil: கண்டி, pronounced [ˈkaɳɖi]) is a major city in Sri Lanka located in the Central Province. It was the last capital of the ancient kings' era of Sri Lanka.The city lies in the midst of hills in the Kandy plateau, which crosses an area of tropical plantations, mainly tea. Kandy is both an administrative and religious city and is also the capital of the Central Province. Kandy is the home of The Temple of the Tooth Relic (Sri Dalada Maligawa), one of the most sacred places of worship in the Buddhist world. It was declared a world heritage site by UNESCO in 1988.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
  <!-- Modal tour package content-->
       <div class="modal " id="myModal_9" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">One Day Package</h4>
        </div>
        <div>
          <p><img src="images/tourpack/onedaytour1.png"></p>
          <br>
          <p><img src="images/tourpack/onedaytour2.png"></p>
          <br>
          <p><img src="images/tourpack/onedaytour3.png"></p>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><b>Any arrangements can be done according to your preference.</b></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


       <div class="modal " id="myModal_10" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Two Day Package</h4>
        </div>
        <div>
          <p><img src="images/tourpack/twoday1.png"></p>
          <br>
          <p><img src="images/tourpack/twoday2.png"></p>
          <br>
          <p><img src="images/tourpack/twoday3.png"></p>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><b>Any arrangements can be done according to your preference.</b></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

       <div class="modal " id="myModal_11" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Three Day Package</h4>
        </div>
        <div>
          <p><img src="images/tourpack/threeday1.png"></p>
          <br>
          <p><img src="images/tourpack/threeday2.png"></p>
          <br>
          <p><img src="images/tourpack/threeday3.png"></p>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><b>Any arrangements can be done according to your preference.</b></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

       <div class="modal " id="myModal_12" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Five Day Package</h4>
        </div>
        <div>
          <p><img src="images/tourpack/fiveday1.png"></p>
          <br>
          <p><img src="images/tourpack/fiveday2.png"></p>
          <br>
          <p><img src="images/tourpack/fiveday3.png"></p>
          <br>
           <p><img src="images/tourpack/fiveday4.png"></p>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><b>Any arrangements can be done according to your preference.</b></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

     <div class="modal " id="myModal_13" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Seven Day Package</h4>
        </div>
        <div>
          <p><img src="images/tourpack/sevenday1.png"></p>
          <br>
          <p><img src="images/tourpack/sevenday2.png"></p>
          <br>
          <p><img src="images/tourpack/sevenday3.png"></p>
          <br>
           <p><img src="images/tourpack/sevendayfinal.png"></p>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><b>Any arrangements can be done according to your preference.</b></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
    <!-- Modal content Nav bar-->
 <div class="modal " id="myModal_14" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content Nav bar-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Contact Us</h4>
        </div>
        <div>
          <p><img src="images/navbar/cu.jpg"></p>
          <br>
          
        </div>
        <div class="modal-body">
          <p>
           <p><b> E-mail:</b></p>

<P> info@jmsprinkler-tours.com </P>


<P> ranjith40@yahoo.com </P>

<P><b>Address:</b></P>

<p>411-B Mahawatta,</p>
<p>Pamunugama.</p>
<p>Sri Lanka.</p>

<p><b>Telephone:</b></p>


<P>Mobile: </P>
<p>+94(0) 716 004 845</p>
<p>+94(0) 77 930 6569</p>
<p>+94(0) 71 5341 291</p>


<p>Tel: </p>
<p>+94(0) 11 223 8272</p>

<p>JM SPRINKLER TOURS</p>
<p> Director</p>
<p>K. U. Anthony</p>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



   <div class="modal " id="myModal_15" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content Nav bar-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">About Us</h4>
        </div>
        <div>
          <p><img style="height: 400px; width: 100%; padding: 20px; padding-left: 40px; padding-right: 40px;" src="images/navbar/tourid.jpg"></p>
          <br>
          
        </div>
        <div class="modal-body">

        <p>
          
       Having served in the industry for over 15 years respectively we came out with the idea of offering leisure and business travellers a spectrum attraction to Sri Lanka, one of the best travel destinations in the world and in order to achieve this at end we set up and brought jmsprinklertours.com for this competitive tourism industry. 
        </p>
        <p>
          Most importantly we as a group considers the customers satisfaction.
Our company jmsprinkler-tours.com gives a matchless service to our customers with various stakeholders in the tourism industry joined with us.
        </p>
        <p>
          Our exquisite packages to destinations have been carefully selected and listed on the website with an opportunity for you to inquire through our contact page
        </p>
        <p>
          We take pride in making your journey a memorable one !!
        </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


 <!-- Modal content feed back-->
    <div class="modal " id="myModal_16" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content Nav bar-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Feedbacks</h4>
        </div>
        <div>
          <p><img style="height: 700px; width: 93%; margin-right:20px; margin-left: 20px;" src="images/feedback/1.jpeg"></p>
          <br>
           <p><img style="height: 700px; width: 93%; margin-right:20px; margin-left: 20px;" src="images/feedback/2.jpeg"></p>
          <br>
           <p><img style="height: 700px; width:  93%; margin-right:20px; margin-left: 20px;" src="images/feedback/3.jpeg"></p>
          <br>
           <p><img style="height: 700px; width: 93%; margin-right:20px; margin-left: 20px;" src="images/feedback/4.jpeg"></p>
          <br>
          
           <p><img style="height: 700px; width: 93%; margin-right:20px; margin-left: 20px;" src="images/feedback/6.jpeg"></p>
          <br>
          
           <p><img style="height: 700px; width: 93%; margin-right:20px; margin-left: 20px;" src="images/feedback/8.jpeg"></p>
          <br>
           <p><img style="height: 700px; width: 93%; margin-right:20px; margin-left: 20px;" src="images/feedback/9.jpeg"></p>
          <br>

        </div>
        <div class="modal-body">

        <p>
          
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


   <!-- Modal content feed back-->
    <div class="modal " id="myModal_17" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content Nav bar-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">More About Us</h4>
        </div>
        <div style="padding: 20px;">
          <h2 style="text-align: center;">Welcome to JM Sprinklertours !</h2>
          <h4>Brief Introduction about us</h4>
          <p>
            JMSprinklertours are renowned Sri Lanka travel agents who organizes tours to every part of Sri Lanka. .A memorable journey, after all, is as much what you do as where you go being a tour company in Sri Lanka.
          </p>
          <p>
            JM SPRINKLER TOURS possesses the necessary expertise to advise you where to go and what to do. Believing in a credo of “Service is a Lifestyle” every member of JM SPRINKLER TOURS boasts of several years of experience in the travel industry.
          </p>
          <p>
            Thereby guests are sure to be offered unforgettable tours from Sri Lanka and an unparalleled level of service at all times. The tours organized by JM SPRINKLER TOURS have been acclaimed as “The Best” by many satisfied customers.
          </p>
          <br>

          <h4>Compliments by Clients</h4>
          <div>
            <p style="margin: 0px;">"All the details were handled well. Your staff was always responsive, answering many questions for us.."</p>
            <p style="margin: 0px;"><i>(Jayne Clark, USA Today)</i></p>
          </div>
          <br>
           <div>
            <p style="margin: 0px;">"… All of the tours we've been on have been well-vetted by jmsp tours. " </p>
            <p style="margin: 0px;"><i>(The Blue Guide)</i></p>
          </div>
          <br>

           <div>
            <p style="margin: 0px;">"" Staff is knowledgeable and responds quickly to questions, offering advice when asked, both prior to booking and after. The company takes the guesswork out of planning an overseas tour, and you can be certain that accommodations, routes and bikes are going to be first-rate.</p>
            
          </div>
          <br>
           <div>
            <p style="margin: 0px;">"Few regions offer a more dazzling display of cultural and artistic treasures than Sri Lanka."</p>
            <p style="margin: 0px;"><i>(Smithsonian Journeys)</i></p>
          </div>
          <br>
           <div>
            <p style="margin: 0px;">"No journey to Asia would be complete without paying a visit to Sri Lanka… Outstanding landscapes, a huge diversity of wildlife…"</p>
            <p style="margin: 0px;"><i>(The Rough Guide)</i></p>
          </div>
          <br>
           <div>
            <p style="margin: 0px;">"Sri Lanka has majestic castles, medieval towns, great hiking and wildlife…"</p>
            <p style="margin: 0px;"><i>(The Lonely Planet)</i></p>
          </div>
          <br>

           <div>
          <p><img style="height: 400px; width: 100%; padding: 20px; padding-left: 40px; padding-right: 40px;" src="images/navbar/tourid.jpg"></p>
          <br>
          
        </div>
        <div class="modal-body">

        <p>
          
       Having served in the industry for over 15 years respectively we came out with the idea of offering leisure and business travellers a spectrum attraction to Sri Lanka, one of the best travel destinations in the world and in order to achieve this at end we set up and brought jmsprinklertours.com for this competitive tourism industry. 
        </p>
        <p>
          Most importantly we as a group considers the customers satisfaction.
Our company jmsprinkler-tours.com gives a matchless service to our customers with various stakeholders in the tourism industry joined with us.
        </p>
        <p>
          Our exquisite packages to destinations have been carefully selected and listed on the website with an opportunity for you to inquire through our contact page
        </p>
        <p>
          We take pride in making your journey a memorable one !!
        </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>



        </div>
        <div class="modal-body">

        <p>
          
      
        </div>
      
      </div>
      
    </div>
  </div>

<!-- Modal content Gallery-->
     <div class="modal " id="myModal_18" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gallery</h4>
        </div>
        <div>
          
        <div class="modal-body">
          <h3>Culture</h3>
          <section class="cd-single-item">
    <div class="cd-slider-wrapper">
      <ul class="cd-slider">
        <li class="selected"><img src="images/gallery/culture/kandy-perahera.jpg" alt="Product Image 1"></li>
        <li><img style="height: 379px" src="images/gallery/culture/image19_fullsize.jpg" alt="Product Image 1"></li>
        <li><img style="height: 379px" src="images/gallery/culture/culture-of-sri-lanka.jpg" alt="Product Image 2"></li>
        <li><img style="height: 379px" src="images/gallery/culture/page.jpg" alt="Product Image 2"></li>
        <li><img style="height: 379px" src="images/gallery/culture/culturesri-lanka.jpg" alt="Product Image 2"></li>
        <li><img  src="images/gallery/culture/Kandy(1).jpg" alt="Product Image 2"></li>
      </ul> <!-- cd-slider -->

      <ul class="cd-slider-navigation">
        <li><a href="#0" class="cd-prev inactive">Next</a></li>
        <li><a href="#0" class="cd-next">Prev</a></li>
      </ul> <!-- cd-slider-navigation -->

      <a href="#0" class="cd-close">Close</a>
    </div> <!-- cd-slider-wrapper -->

    
  </section> <!-- cd-single-item -->
  <br>

   <section class="cd-single-item">
    <div class="cd-slider-wrapper">
      <ul class="cd-slider">
        <li class="selected"><img src="images/gallery/culture/183804580.jpg" alt="Product Image 1"></li>
        <li><img src="images/gallery/culture/invite.jpg" alt="Product Image 1"></li>
        <li><img src="images/gallery/culture/Lumprais-1.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/SriLanka01.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/slfood.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/sri-lanka-2-166.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/1508454484439.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/c700x420.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/6b663cfdf01bbea6.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/foods_3.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/a898d051e8e7abca698f18bbaf1b2627.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/MirisKokis 3.jpg" alt="Product Image 2"></li>
      </ul> <!-- cd-slider -->

      <ul class="cd-slider-navigation">
        <li><a href="#0" class="cd-prev inactive">Next</a></li>
        <li><a href="#0" class="cd-next">Prev</a></li>
      </ul> <!-- cd-slider-navigation -->

      <a href="#0" class="cd-close">Close</a>
    </div> <!-- cd-slider-wrapper -->

    
  </section> <!-- cd-single-item -->
  <br>
  <h3>Nature</h3>
   <section class="cd-single-item">
    <div class="cd-slider-wrapper">
      <ul class="cd-slider">
        <li class="selected"><img src="images/gallery/nature/nws-st-sri-lanka-tea-plantations.jpg" alt="Product Image 1"></li>
        <li><img src="images/gallery/nature/IMG-Comp-640x416.jpg" alt="Product Image 1"></li>
        <li><img src="images/gallery/nature/Maskeliya.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/nature/Sinharaja-Poem.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/nature/03.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/nature/screen-shot.png" alt="Product Image 2"></li>
        <li><img src="images/gallery/nature/tissa75.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/c700x420.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/6b663cfdf01bbea6.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/foods_3.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/a898d051e8e7abca698f18bbaf1b2627.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/culture/MirisKokis 3.jpg" alt="Product Image 2"></li>
      </ul> <!-- cd-slider -->

      <ul class="cd-slider-navigation">
        <li><a href="#0" class="cd-prev inactive">Next</a></li>
        <li><a href="#0" class="cd-next">Prev</a></li>
      </ul> <!-- cd-slider-navigation -->

      <a href="#0" class="cd-close">Close</a>
    </div> <!-- cd-slider-wrapper -->

    
  </section> <!-- cd-single-item -->
  <br>
  <div id="nature">

   <section class="cd-single-item">
    <div class="cd-slider-wrapper">
      <ul class="cd-slider">
        <li class="selected"><img src="images/gallery/nature/130809060838elephant@kaudulla copy_ARTICLES_S4.jpg" alt="Product Image 1"></li>
        <li><img src="images/gallery/nature/Mammals-in-Sri-Lanka-1.jpg" alt="Product Image 1"></li>
        <li><img src="images/gallery/nature/images(1).jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/nature/sri_lanka_animals-1024x683.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/nature/maxresdefault.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/nature/18-Elephants.jpg" alt="Product Image 2"></li>
         <li><img src="images/gallery/nature/06.jpg" alt="Product Image 2"></li>
      </ul> <!-- cd-slider -->

      <ul class="cd-slider-navigation">
        <li><a href="#0" class="cd-prev inactive">Next</a></li>
        <li><a href="#0" class="cd-next">Prev</a></li>
      </ul> <!-- cd-slider-navigation -->

      <a href="#0" class="cd-close">Close</a>
    </div> <!-- cd-slider-wrapper -->

    
  </section> <!-- cd-single-item -->
</div>


 <div id="bird">
  <h3>Birds</h3>
   <section class="cd-single-item">
    <div class="cd-slider-wrapper">
      <ul class="cd-slider">
        <li class="selected"><img src="images/gallery/bird/1.jpg" alt="Product Image 1"></li>
        <li><img src="images/gallery/bird/2.jpg" alt="Product Image 1"></li>
        <li><img src="images/gallery/bird/3.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/bird/4.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/bird/5.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/bird/6.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/bird/7.jpg" alt="Product Image 2"></li>
        <li><img src="images/gallery/bird/8.jpg" alt="Product Image 2"></li>
       <li><img src="images/gallery/bird/9.jpg" alt="Product Image 2"></li>
       <li><img src="images/gallery/bird/10.jpg" alt="Product Image 2"></li>
       <li><img src="images/gallery/bird/11.jpg" alt="Product Image 2"></li>
          <li><img src="images/gallery/bird/12.jpg" alt="Product Image 2"></li>
             <li><img src="images/gallery/bird/13.jpg" alt="Product Image 2"></li>
      </ul> <!-- cd-slider -->

      <ul class="cd-slider-navigation">
        <li><a href="#0" class="cd-prev inactive">Next</a></li>
        <li><a href="#0" class="cd-next">Prev</a></li>
      </ul> <!-- cd-slider-navigation -->

      <a href="#0" class="cd-close">Close</a>
    </div> <!-- cd-slider-wrapper -->

    
  </section> <!-- cd-single-item -->
</div>


  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  

  <script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->





<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!--<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>-->
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>