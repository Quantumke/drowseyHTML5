<?php
$id=$_GET["id"];
require ('db-drivers.php');
?>


<html>
<head>
    <title></title>
       <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/materialize.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
             <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
             <link rel="stylesheet" href="css/font-awesome-4.4.0/css/font-awesome.css">
              <link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>

    <link href="sliders/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="sliders/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
</head>
<body>
         <style type="text/css">
        .cap  {width:190px;height:240px;display:inline-block;background:white url(images/caption1.gif) no-repeat 0 0;border-radius:4px;}
        .cap2 {background-image:url(images/caption2.gif)}
        .cap3 {background-image:url(images/caption3.gif)}
        .cap4 {background-image:url(images/caption4.gif)}
    </style>

    <div class="hdr-strip-one">
            <div class="container">
                <div class="row">
                    <div class="hdrstripone col s4 m4 l4">

                         <a class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-long-arrow-left"></i></a>


                    </div>
                    <div class="logo-one">
                        <div class="container">
                            <div class="row">
                                <div class="logo-one-one col s9 m9 l9">
                                    <img src="img/logo.png">
                                      <span style="color:#00A7E6; margin-top:30px;position:absolute;font-family: 'Sacramento', cursive;
    font-size: 30px;font-weight: bolder;">Wambu</span>
                  <span style="color:#716558; margin-top:30px;position:absolute;font-family: 'Sacramento', cursive;
    font-size: 30px;font-weight: bolder;margin-left:100px">Realtors</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<div class="bodyofproof">
    <div class="container">
        <div class="row">
                <?php
$sql = "SELECT * from offers where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

 ?>           <div class="col s12 l12 m12">
                     <div class="btnbox">
                   <img src="img/icon-bath.gif">
                <span style="position: absolute; padding-top: 12px;"><?php echo $row["baths"] ?> baths</span>

  </div>

          <div class="btnbox">
                   <img src="img/icon_bed.png">
                <span style="position: absolute; padding-top: 12px;"><?php echo $row["beds"] ?> Bedrooms</span>

  </div>
                <div class="btnbox">
                 <img style="margin-top: 9px;" src="img/icon-money.png">
                <span style="position: absolute; padding-top: 12px;"><?php echo $row["monthly_rent"] ?> p.m</span>

  </div>


                </div>



        </div>
    </div>
</div>

<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col s7 m7 l7">

          <div id="sliderFrame">
        <div id="slider">
            <a href="http://www.menucool.com/"><img src="images/slider-1.jpg"  /></a>

            <a class="lazyImage" href="images/slider-2.jpg">slide 2</a>

            <a href="http://www.menucool.com/javascript-image-slider">
                <b data-src="images/slider-3.jpg" >Image Slider</b>
            </a>

            <a class="lazyImage" href="images/slider-4.jpg">slide 4</a>
        </div>
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb"><img src="images/interior.jpg" width="28" height="28" /></div>
            <div class="thumb"><img src="images/interior.jpg" width="28" height="28" /></div>
            <div class="thumb"><img src="images/extirior.png" width="28" height="28" /></div>
            <div class="thumb"><img src="images/extirior.png" width="28" height="28" /></div>
        </div>
        <!--captions-->

    </div>


            </div>
        </div>
    </div>
</div>

<div class="description-detailed">
    <div class="container">
        <div class="row">
            <div class="desc-detailed col s6 m6 l6">
                <p>
                  <h5> Description  </h5>
                </p>
                <p style="overflow:scroll; height:300px; overflow-x:hidden">
                    <?php echo $row["description"] ?>
                </p>
            </div>
            <div class="desc-detailed col s6 m6 l6">
              <p>
                  <h5> Details  </h5>
                </p>
            <p class="ques">Price: <span class="answer"> <?php echo $row["monthly_rent"] ?></span></p>
             <p class="ques">Location <span class="answer"> <?php echo $row["location"] ?> </span></p>
              <p class="ques">Agency: <span class="answer"> <?php echo $row["housing_agency"] ?> </span></p>
               <p class="ques">Type: <span class="answer"> <?php echo $row["housing_type"] ?> </span></p>
                <p class="ques">Garages: <span class="answer"> <?php echo $row["garages"] ?> </span></p>
                 <p class="ques">Bathrooms: <span class="answer"> <?php echo $row["baths"] ?> </span></p>
                 <p>
                     <?php
                     }
                     } else {
                         echo "0 results";
                     }
                     $conn->close();
                     ?>



                     <div class="gplus">
                         <i class="fa fa-google-plus"></i>
<span style="font-size:small">Google Plus</span>
                     </div>

                      <div class="fb">
                         <i class="fa fa-facebook"></i>
<span style="font-size:small">Facebook</span>
                     </div>

                      <div class="twitter">
                         <i class="fa fa-twitter"></i>
<span style="font-size:small">Twitter</span>
                     </div>

                 </p>
        </div>

        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-item col s12 m12 l12">
                <span>
   <span style="color:#00A7E6;font-family: 'Sacramento', cursive;
    font-size: 30px;font-weight: bolder;">Wambu</span>
                  <span style="color:#716558;font-family: 'Sacramento', cursive;
    font-size: 30px;font-weight: bolder;">Realtors  &#0153;</span>
    &nbsp;&nbsp;

<span class="west">&copy; Wambu Realtors 2015 all rights reserved</span>
                </span>






            </div>


        </div>
    </div>
</div>
<script>
    var i,c;
// i=image, c=current
$(document).ready(function(){
 $('.slides li').first().stop(true,true).addClass('active').animate({opacity:1},500);
 $('.nav li a').click(function(){

 // The clicked nav bullet/image = i
 i=$(this).attr('nav_id');

 // The current, active image = c
 c=$('.slides li[class="active"]').attr('img_id');

 // prevent re-showing if current image is the same as clicked image
 if(c==i)return false;

 // Remove the current image active class and apply active class to clicked button
 $('li[img_id="'+c+'"]').css({'opacity':.8}).removeClass('active');
 $('li[img_id="'+i+'"]').animate({'opacity':1},400).addClass('active');

 // Change the nav button state to correct active button
 $('li a[nav_id="'+c+'"]').removeClass('active');
 $('li a[nav_id="'+i+'"]').addClass('active');

 return false;
 });
});

    </script>

</body>

</html>
