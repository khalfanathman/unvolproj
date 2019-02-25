<div class="w3-row">
	<div class="w3-container w3-quarter"></div>
	<div class="w3-container w3-half">
		<div class='container w3-center'>
		<div class='w3-container w3-card w3-border-theme w3-bottombar w3-topbar'>
		<!--echo "<th>System users</th-->
		<!--th>USER ID</th><th>FIRST NAME</th><th>MIDDLE NAME</th><th>LAST NAME</th><th>SURNAME</th><th>MAIL</th><th>STATUS</th><th>TYPE</th-->
		<?php 

		$id=$user[0];
		$f_name = $user[1];
		$m_name= $user[2];
		$l_name=$user[3];	
		$s_name=$user[4];
		$u_name=$user[5];
		$mail=$user[6];

		
		echo  $f_name . " ";
		echo  $m_name . " ";
		echo  $l_name . " ";	
		echo  $s_name . " ";
		echo  $u_name . " ";
		echo  '<br>';

		if ($role = 5 or 7){
			//echo $id;
			$id = $user[0];
			echo "<form class='' action='?controller=user&action=delete' method='post'>are you sure you want to delete this user ?";
			echo "<select class='w3-select' name='ido'>
		<option value=''>select</option>
		<option value=' $id '>YES</option>
		</select>
		<button class='w3-button w3-theme' name='yes'>GO</button>";
			echo "<button class='w3-button w3-theme' name='no'>CANCEL</button></form>"; 

		}
		  		
		?>
		</div></div>	
	</div>
	<div class="w3-container w3-quarter"></div>
</div>
</div>
