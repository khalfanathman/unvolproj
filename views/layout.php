<!DOCTYPE html>
<html>
<head>
	<title>UNV Youth Program</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/unv/views/assets/4/w3.css" type="text/css">
	<!--link rel="stylesheet" href="/pgd/views/assets/4/w3mobile.css" type="text/css"-->
	<link href="assets/style.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="/unv/views/assets/lib/w3-my-color.css">
	<script src="/unv/views/assets/jquery-1.12.0.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="/unv/views/assets/fontawesome-free-5.0.13\web-fonts-with-css\css/fontawesome-all.css" type="text/css">
	<style>
		body, html {
		    height: 100%;
		    display: table;
		    width: 100%;
		}

		.bg {
		    /* The image used */
		    background-image: url("views/assets/3.jpeg");

		    /* Full height */
		    /*height: 100%;
		    */height: auto;

		    /* Center and scale the image nicely */
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		    opacity: 'w3-opacity';
		}
			.kolam{
	     float: left;
	    width:25%;
	    display: block;
	    padding: auto;
	    height: auto; ; /* Should be removed. Only for demonstration */
		}

		.rooh:after {
		    content: "";
		     width:auto;
		    display: table;
		    clear: both;
		}
		
/* Clear floats after the clmns */
	
		.footer{
			background-color: slategrey;
			/*display: table-row;
			*/width : 100%;	
			display: block;
			height: 1px;
		}
		#container {
   width: 302px;
   height: 132px;
    float: right;
}

#container img {
   width: 100%;
   height: 100%;
   float: right;
}

	</style>
</head>

<body>


	<header class="w3-text w3-xlarge ">
		<div class="w3-container w3-border-blue w3-text-blue w3-theme" >
			<div id="container">
   			 <img src="views/assets/unv.jpg" alt="" />
			</div>
			<span style="float:left;" class="w3-text w3-large">
			<br><?php //o date("h:i:s");?></span>
			<span class="w3-text w3-xxlarge">UNITED NATIONS</span> 
			<br>VOLUTEER PROGRAM
		
	<?php 
	 require('navi.php'); ?>
	
	</div>
	</header>
	<center>
	<div class='w3-container w3-theme'>	
	<!--div class="w3-container w3-large w3-center"-->
		<div class="bg" >			
			<br>
			<br><br>
			<div class='caption'>
				<?php require_once('routes.php'); ?>
				
			</div>
			<br><br><br>
		</div>
	
	<!--/div-->
	</div>
	</center>
	<!-- 	<div class="w3-container
		" -->
		<div class="footer" >
		<div class="w3-container w3-theme "> <!--style="height : 60px; width:100%"-->
			
			 <div class="rooh">
			 	<div class="kolam w3-mobile" > <!--  w3-dn-footer-nav-col w3-col-xl-2 w3-col-lg-3 w3-col-md-4 w3-col-6 -->
					<h6><b>Important Links</b></h6>
					<ul >
						<li><a href="http://www.unv.org"  style="text-decoration:none">United Nations volunteer</a></li>
						<li><a href="http://www.inspira.com" style="text-decoration:none">Scientific Research</a></li>
						<li><a href="" style="text-decoration:none">International organisation</a></li>
					</ul>
				</div>
				<div class="kolam w3-mobile"><!--  w3-dn-footer-nav-col w3-col-xl-2 w3-col-lg-3 w3-col-md-4 w3-col-6"> -->
					<h6><b>About UNV</b></h6>
					<ul>
						<li><a href=""  style="text-decoration:none">Research and Publication</a></li>	
						<li><a href="" style="text-decoration:none">organization Department</a></li>
						<li><a href="" style="text-decoration:none">Information Technology</a> </li>
					</ul>				
				</div>
			
				<div class="kolam w3-mobile" > <!--  w3-dn-footer-nav-col w3-col-xl-2 w3-col-lg-3 w3-col-md-4 w3-col-6"> -->
					<h6><b>Address & Contacts</b></h6>
					<ul>
						<li><span style="text-decoration:none"><i class="fa fa-phone w3-medium" aria-hidden="true"></i> +254740403037</span></li>	
						<li><a href="?controller=pages&action=contact_us" style="text-decoration:none"><i class="fa fa-envelope w3-medium" aria-hidden="true"></i>  info@unv.org</a></li>
						<li><span style="text-decoration:none"><i class="fa fa-map-marker w3-medium"></i>  lovington, Nairobi, Kenya</span></li>
					</ul>
					
				</div>
		  		<div class="kolam w3-mobile w3-my-color " > <!-- w3-dn-footer-nav-col w3-col-xl-2 w3-col-lg-3 w3-col-md-4 w3-col-6"> -->
					
					<h6><b>Social Media</b></h6>
					<ul>
					<li><span style="text-decoration:none"><i class="fab fa-facebook w3-hover-opacity"></i>Facebook</span></li>
				    <li><span style="text-decoration:none"><i class="fab fa-instagram w3-hover-opacity"></i>Instagram</span></li>
				    <li><span style="text-decoration:none"><i class="fab fa-pinterest-p w3-hover-opacity"></i>Pinterest</span></li>
				    <li><span style="text-decoration:none"><i class="fab fa-twitter w3-hover-opacity"></i>twitter</span></li>
				    <li><span style="text-decoration:none"><i class="fab fa-linkedin w3-hover-opacity"></i>linkedin</span></li>
				    <li><span style="text-decoration:none"><i class="fab fa-youtube w3-hover-opacity"></i>YouTube</span></li>
					</ul>
				 
		  		</div>
		  	</div>
				<div class="w3-ul w3-small w3-quarter w3-center" style="margin : 0px;width : 100%">
					  <a class='w3-button w3-opacity' href="?controller=pages&action=gallery">Gallery</a>
					<script src="https://apps.elfsight.com/p/platform.js" defer></script>
					<div class="elfsight-app-444a1818-c7dd-4814-87c3-0191bf886aa7"></div>

				</div>
		<div>
		<span class="center w3-container w3-text-white w3-opacity w3-large">
					UNITED NATIONS, 
					NAIROBI,
					<span class="w3-text">copyright <?php echo date("Y"); ?></span><br>
					<!--span class="w3-text w3-large"><br> International University of Africa</span></span-->
			</span>
		</div><!-- 
	</div> -->
<!-- 	<br> -->
	</div>
</div>
	</body>
	</html>


<script type="text/javascript">
(function() {

var img = document.getElementById('container').firstChild;
img.onload = function() {
    if(img.height > img.width) {
        img.height = '100%';
        img.width = 'auto';
    }
};

}());
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>