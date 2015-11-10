
   <?php


$todo=$_POST['todo'];
if(isset($todo) and $todo=="search"){
$Bathrooms=$_POST['Bathrooms'];
$bedrooms=$_POST['bedrooms'];
$estate=$_POST['estate'];


$query="select * from offers where ";


//
//Searching Estate
if(strlen($estate) > 0 ){
$query.= " estate='$estate' and ";
}


//   Bathroom search algorithim

$Bathrooms=ltrim($Bathrooms);
$Bathrooms=rtrim($Bathrooms);

if(strlen($Bathrooms)>0){
if($type<>"any"){
$query .=" name='$Bathrooms'";
}else{
$kt=preg_split("/[s,]+/",$Bathrooms);
while(list($key,$val)=each($kt)){
if($val<>" " and strlen($val) > 0){$query .= " name like '%$val%' or ";}

}
$query=substr($query,0,(strLen($query)-3));

}
$query.=" and ";
}

//
//Bedroom search algorithim
$bedrooms=ltrim($bedrooms);
$bedrooms=rtrim($bedrooms);

if(strlen($bedrooms)>0){


    else{
$kt2=preg_split("/[s,]+/",$Bathrooms);
while(list($key2,$val2)=each($kt2)){
if($val2<>" " and strlen($val2) > 0){$query2 .= " name2 like '%$val2%' or ";}

}
$query2=substr($query2,0,(strLen($query2)-3));

}
$query2.=" and ";
}








$query=substr($query,0,(strLen($query)-4));

echo "<span style="background-color: #F0F000">$query</span>";
echo "<br><br>";
// Display records ////
foreach ($dbo->query($query) as $t) {
echo "$t[id] , $t[name],$t[class],$t[mark],$t[sex]<br>";
}
}
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

                <div class="col s12 l12 m12">
                     <div class="btnbox">
                   <img src="img/icon-bath.gif">
                <span style="position: absolute; padding-top: 12px;">5 baths</span>

  </div>

          <div class="btnbox">
                   <img src="img/icon_bed.png">
                <span style="position: absolute; padding-top: 12px;">5 Bedrooms</span>

  </div>
                <div class="btnbox">
                 <img style="margin-top: 9px;" src="img/icon-money.png">
                <span style="position: absolute; padding-top: 12px;">12,000 p.m</span>

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
<<<<<<< HEAD:details.php

=======

>>>>>>> 063980d08c4f173de7794546642f782ea9248c01:details.html
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
                     Aenean lectus tortor, pulvinar auctor rutrum et, elementum eu eros. Fusce et lorem venenatis, varius dui ac, porttitor orci. Proin et leo vel risus accumsan condimentum. Sed nec ex porta, bibendum eros eget, vehicula quam. Suspendisse elementum purus congue lectus porttitor, id semper dui dignissim. Etiam sit amet dapibus nisl. Cras sollicitudin ut dui sed lobortis. Nulla pulvinar augue eu leo suscipit facilisis. Integer vel efficitur urna, at venenatis urna.

Mauris placerat et orci vel luctus. Nulla scelerisque nibh eu egestas elementum. Vestibulum at urna ac odio porta interdum sit amet at sem. Suspendisse imperdiet, leo sed volutpat faucibus, turpis mauris maximus augue, quis dignissim neque purus ac lorem. Proin nec ultricies velit. Aliquam quis tortor at dolor imperdiet euismod. Proin eleifend pretium massa, eu sodales magna sagittis et.

                </p>
            </div>
            <div class="desc-detailed col s6 m6 l6">
              <p>
                  <h5> Details  </h5>
                </p>
            <p class="ques">Price: <span class="answer"> KES 12,000 </span></p>
             <p class="ques">Location <span class="answer"> Co-Site </span></p>
              <p class="ques">Agency: <span class="answer"> Wambu </span></p>
               <p class="ques">Type: <span class="answer"> One Bedroom </span></p>
                <p class="ques">Garages: <span class="answer"> 1 </span></p>
                 <p class="ques">Bathrooms: <span class="answer"> 2 </span></p>
                 <p>

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
