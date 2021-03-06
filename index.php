
<?php include 'db-drivers.php'?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>
    </title>
    <link rel="stylesheet" href="css/overlay.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/font-awesome-4.4.0/css/font-awesome.css">
 <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>
    </head>

<body>

<!--
<div class="header-strip col s12">
       <div class="container">
           <div class="row">
               <div class="h-strip col s4">
                   <span>RENTERS</span>&nbsp;<span class="renters"></span>
                   <span>LANDLORDS</span>
               </div>
               <div class="h-strip col s8">
               <span>CONTACT GRACE &nbsp; <i class="fa fa-envelope-o"></i> info@wamburealtors.co.ke  &nbsp;
             <i class="fa fa-phone"></i> 0722934937
              </span>
               </div>
           </div>
    </div></div>
-->
 <!-----side slide-------------->
 <div class="side" title="More">
<h2> <span style="color:#fff; font-family: 'Sacramento', cursive; font-size: 30px;font-weight: bolder;">Wambu</span>
    <span style="color:#716558; font-family: 'Sacramento', cursive; font-size: 30px;font-weight: bolder">Realtors</span></h2>
				<p>Are you a landlord? or do you have any property you want managed?</p>
     <p><div class="btn-offer">
     <i class="fa fa-plus"></i> &nbsp; offer
     </div></p>
     <div class="socialicons">
				<p>Dont Forget <br>
				<i class="fa fa-facebook fa-2x"></i>&nbsp;
				<i class="fa fa-twitter fa-2x"></i>&nbsp;
				<i class="fa fa-instagram fa-2x"></i>&nbsp;
				<i class="fa fa-google-plus fa-2x"></i>&nbsp;


         </p></div>

			</div>
 <!-----end---->
  
   <div class="logo-strip">
      <div class="container">
          <div class="row">
              <div class="lg-img col s12">
                  <img src="img/logo.png">
                   <span style="color:#00A7E6; margin-top:30px;position:absolute;font-family: 'Sacramento', cursive;
    font-size: 30px;font-weight: bolder;">Wambu</span>
                  <span style="color:#716558; margin-top:30px;position:absolute;font-family: 'Sacramento', cursive;
    font-size: 30px;font-weight: bolder;margin-left:100px">Realtors</span>
              </div>

              <div class="site-tile col s12 l12 m12">
                  <p style="color:#00A7E6">Find Rental houses around You</p>
              </div>
             
              <div class="buttons col s12">



                      <div id="container" data-overlay-page-wrap>

			<a style="color:white" id="overlayTrigger2" href="#myOverlay2" data-overlay-trigger>
                       <div class="buttn">
                       SEARCH
                   </div> </a>

                   <a style="color:white" id="overlayTrigger2" href="#myOverlay2" data-overlay-trigger>
                       <div class="buttn2">
                       Book
                   </div></a>

		</div>


              </div>

          </div>
      </div>
       
    </div>

    <!---------------------------------------_END ---------------------------------------------------------------------->

    <div class="about-large">
        <div class="container">
            <div class="row">
                <div class="about col s12 m12 l12">
                    <p><h5 style="margin-left:25%;font-family: 'Armata', sans-serif;">ABOUT WAMBU REALTORS &#0153;  </h5></p>
                    <p style="font-family: 'Armata', sans-serif;">
                        Wambu Realtors is a full service residential real estate company serving Nyahururu, Kenya and the surrounding areas. We take pride in offering our clients professional service and expert advice. Whether you are searching homes online, considering a purchase or a sale, or just getting to know Nyahururu area neighborhoods we are here for you.


                    </p>



                </div>


        </div>
    </div>







<div class="property">
    
    <div class="container">
        <div class="row">

<?php

    $sql = "SELECT * FROM offers LIMIT 12";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>

            <div class="unit col s12 l3 m3 ">
                 <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/<?php echo $row['image'] ?>">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">
      <img src="img/icon-bath.gif" height="26" width="26"> <?php echo $row['baths'] ?> &nbsp;
      <img src="img/icon_bed.png"><?php echo $row['beds'] ?>
      
      
      <i class="material-icons right">more_vert</i></span>
      <p>KSH. &nbsp;<?php echo $row['monthly_rent'] ?></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo $row['housing_type'] ?><i class="material-icons right">close</i></span>
      <p><?php echo $row['sht_desc'] ?></p>
      <p><a href="details.php?id=<?php echo $row['id'] ?>">More</a></p>
    </div>
  </div>


            </div>
               <?php
                }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
<!--            NEW ITEM................................................................................-->
       
       

            <!---------------------------------------------new item----------------------------------------------->
            

            
<!--                                           new item-->
           

            
            
<!--                       new item-->

            
            
<!--                       new item-->
                      

<!--                       new item-->
                     

            
<!--                       new item-->
                      
                      

            
            
<!--                       new item-->
                      
                      
                      
          <div class="col s1 m1 l1">
              <div class="seemore">
                  SEE MORE
              </div>
          </div>
                      
           

            
        </div>
    </div>
</div>

<div class="bannerme">
    <div class="container">
        <div class="row">
            <div class="bner col s12 m12 l12">
               <div class="bannerimage  col s3 m3 l3">

                   <p>Connect with us</p>
               </div>
                  <div class="bannerimage  col s3 m3 l3">

                 <p>
                       <i class="fa fa-facebook fa-2x"></i> &nbsp;
                   <i class="fa fa-twitter fa-2x"></i>&nbsp;
                   <i class="fa fa-instagram fa-2x"></i>&nbsp;
                   <i class="fa fa-google-plus fa-2x"></i>

                 </p>
               </div>
                  <div class="bannerimage  col s3 m3 l3">

                   <p>   <i class="fa fa-plus"></i>
 Offer Property</p>
               </div>

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

 <div style="display:none;">
			<!-- Each overlay needs an id. The aria-labelledby is not required but is best practice -->




			<div id="myOverlay2" aria-labelledby="myOverlay2Heading" data-overlay-container-class="slide-down">
			<div class="container">
			    <div class="row">
			        <div class="logo-popup col s12 m12 l12 ">
			            <img src="img/logo.png">
			            <span style="color:#00A7E6; margin-top:30px;position:absolute;font-family: 'Sacramento', cursive;
    font-size: 30px;font-weight: bolder;">Wambu</span>
                  <span style="color:#716558; margin-top:30px;position:absolute;font-family: 'Sacramento', cursive;
    font-size: 30px;font-weight: bolder;margin-left:100px">Realtors</span>
			        </div>
<!--
			        <form class="" action="search.php" method="post" enctype="multipart/form-data">
<input type=hidden name=todo value=search>
			        <div class="search-bar">
                  <input type=hidden name=todo value=search>
			          <div class="input-field col s3 m3 l3">
             <input id="bathrooms" name="bathrooms" type="text" >
          <label for="Bathrooms">Bathrooms</label>
        </div>
                 <div class="input-field col s3 m3 l3">
             <input id="bedrooms" name="bedrooms" type="text" >
          <label for="Bedrooms">Bedrooms</label>
        </div>

                 <div class="input-field col s3 m3 l3">


    <select  name="estate" id="estate"class="browser-default">
    <option>ESTATE</option>

<!--
     	//
        //mysql_connect('localhost' , 'root', 'master12!') or die(mysql_error);
       // mysql_selectdb('hschema') or die(mysql_error);
										//session_start();
									    //$sql="select name from  table_schema_estates  order by name " ;
  										//$result=mysql_query($sql) or die(mysql_error());
  										//$count=mysql_num_rows($result);
											//$i=0;
											//for($i=0;$i<$count; $i++)
											//{
											//	$opt=mysql_result($result,$i,"name");

												//echo("<option>$opt</option>");


											//}

										//?>
<!--
    </select>
  </div>
  <div class="btnsearch col s12 l12 m12"  style="margin-left: 25%;">
   <input type=submit value=Search>
  </div>


			        </div>
			        </form>
-->



<?php

$host_name = "localhost";
$database = "hschema"; // Change your database nae
$username = "root";          // Your database user id
$password = "master12!";          // Your password

try {
    $dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
                    <div class="col s12 m12 l12">

			        <?Php
echo "<form method=post action='search.php'><input type=hidden name=todo value=search>";
$q="select distinct name from table_schema_estates";
echo " <div class='input-field col s3 m3 l3'>
<select name=location class='browser-default'><option value=''>Any Estate</option>";
foreach ($dbo->query($q) as $n) {
echo "<option value=$n[name]>$n[name]</option>";
}
echo "</select></div>";

echo "<div class='input-field col s3 m3 l3'>Bedrooms<input type=text name=search_text ><input type=submit value=Search>
<input type=radio name=type value=any checked> <input class='btnbox' type=radio name=type value=exact>
</div>
</form>
";
?>
</div>





			    </div>
			</div>

			</div>




		</div>

<script>
      $('.fixed-action-btn').openFAB();
     $('.fixed-action-btn').closeFAB();



</script>
   <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.sidecontent.js"></script>
	<script type="text/javascript">
		$(".side").sidecontent();
	</script>
    
    <script src="js/Overlay.js"></script>
    </body>

</html>
