<div class='w3-row'>
<div class='w3-container w3-left' style="width: 100px"></div>
	<div class="w3-container w3-card  w3-black w3-topbar w3-bottombar w3-border-theme" style='width: 860px'>

		<div class='pics' >
		<img class="mySlides" src="krt.jpg" style="width:850px;height:auto;margin-left:-11px;">	  		
		<img class="mySlides" src="krt1.jpg" style="width:850px;height:auto;margin-left:-11px;">
		<img class="mySlides" src="conference.jpg" style="width:850px;height:auto;margin-left:-11px;">
		<span class="w3-container w3-padding-16 w3-black w3-opacity-min">
	    	Learn at the center of Arab Culture
			
		</span>
	</div>

</div>
<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>

</div>
<div class='w3-container w3-right' style="width: 100px"></div>