<div class="w3-row">
<div class="w3-container w3-quarter"></div>
<div class="w3-container w3-card w3-half w3-padding-32 w3-black w3-opacity-min w3-topbar w3-bottombar w3-border-theme" style="margin-left : auto; margin-right : auto;">
<h2 class="w3-text w3-text-theme">Edit project</h2>
<?php
	$id=$project[0];
	$f_name = $project[1];
	$m_name= $project[2];
	$l_name=$project[3];	
	$s_name=$project[4];
	$u_name=$project[5];
	echo  $f_name . " ";
	echo  $m_name . " ";
	echo  $l_name . " ";	
	echo  $s_name . " ";
	echo  $u_name . " ";
	echo $id. " ";
	echo  '<br><br>';	
?>
<button onclick="myFunction('project')" class="w3-btn w3-block w3-theme w3-left-align">Edit Project Information</button>
<div id='project' class="w3-container w3-hide">
	<form class="w3-container w3-card w3-padding-32 w3-black w3-opacity-min w3-topbar w3-bottombar w3-border-theme" action="?controller=project&action=edit&id=<?php echo $id; ?>" method="post">	
	<label class="w3-small w3-left">Project-Title</label>
	<input class="w3-input" required name="name1" type="text" placeholder="title">
	<label class="w3-small w3-left">Dates from GCF</label>
	<input class="w3-input" required name="name2" type="date" placeholder="">	
	<label class="w3-small w3-left">Start Date</label>
	<input class="w3-input" name="name3" type="date" placeholder="">
	<label class="w3-small w3-left">End Date</label>
	<input class="w3-input" name="name4" type="date" placeholder="">
	<label class="w3-small w3-left">Duration</label>
	<input class="w3-input" name="name5" type="text" placeholder="months">
	<button class="w3-button w3-left w3-theme" type="submit" name="submit0">Update</button>
</form>
</div>

</div>
</div>
<br>
<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>