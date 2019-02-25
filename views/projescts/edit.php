<div class="w3-row">
<div class="w3-container w3-quarter"></div>
<div class="w3-container w3-card w3-half w3-padding-32 w3-black w3-opacity-min w3-topbar w3-bottombar w3-border-theme" style="margin-left : auto; margin-right : auto;">
<h2 class="w3-text w3-text-theme">Edit User</h2>
<?php
	$id=$user[0];
	$f_name = $user[1];
	$m_name= $user[2];
	$l_name=$user[3];	
	$s_name=$user[4];
	$u_name=$user[5];
	$mail=$user[6];
	$status=$user[9];
	echo  $f_name . " ";
	echo  $m_name . " ";
	echo  $l_name . " ";	
	echo  $s_name . " ";
	echo  $u_name . " ";
	echo  $status . " ";
	echo  '<br><br>';	
?>
<button onclick="myFunction('user')" class="w3-btn w3-block w3-theme w3-left-align">Edit Basic Information</button>
<div id='user' class="w3-container w3-hide">
	<form class="w3-container w3-card w3-padding-32 w3-black w3-opacity-min w3-topbar w3-bottombar w3-border-theme" action="?controller=user&action=edit&id=<?php echo $id; ?>" method="post">	
	<label class="w3-small w3-left">First Name</label>
	<input class="w3-input" required name="name0" type="text" placeholder="first name">
	<label class="w3-small w3-left">Middle Name</label>
	<input class="w3-input" required name="name1" type="text" placeholder="middle name">
	<label class="w3-small w3-left">Last Name</label>
	<input class="w3-input" required name="name2" type="text" placeholder="last name">	
	<label class="w3-small w3-left">Surname</label>
	<input class="w3-input" name="name3" type="text" placeholder="surname (optional)">
	<button class="w3-button w3-left w3-theme" type="submit" name="submit0">Update</button>
</form>
</div>
<button onclick="myFunction('user1')" class="w3-btn w3-block w3-black w3-left-align">Edit Login Information</button>
<div id='user1' class="w3-container w3-hide"><form class="w3-container w3-card w3-padding-32 w3-black w3-opacity-min w3-topbar w3-bottombar w3-border-theme" action="?controller=user&action=edit" method="post">
	<label class="w3-small w3-left">Userame</label>	
	<input class="w3-input" required name="username" type="text" placeholder="new yourname">
	<label class="w3-small w3-left">Email</label>
	<input class="w3-input" required name="mail" type="text" placeholder="new valid e-mail">
	<button class="w3-button w3-left w3-theme" type="submit" name="submit1">Update</button>
</form>
</div>
<button onclick="myFunction('user2')" class="w3-btn w3-block w3-theme w3-left-align">Edit Password</button><div id='user2' class="w3-container w3-hide">
<form class="w3-container w3-card w3-padding-32 w3-black w3-opacity-min w3-topbar w3-bottombar w3-border-theme" action="?controller=user&action=edit" method="post">

	<label class="w3-small w3-left">Old Password</label>
	<input class="w3-input" required name="password0" type="password" placeholder="enter old password">
	<label class="w3-small w3-left">New Password</label>
	<input class="w3-input" required name="password0" type="password" placeholder="enter new password">	
	<label class="w3-small w3-left">Confirm New Password</label>
	<input class="w3-input" required name="password1" type="password" placeholder="confirm password" required>
	<button class="w3-button w3-left w3-theme" type="submit" name="submit2">Update</button>
</form>
</div>
</div>
<br>
</div>
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