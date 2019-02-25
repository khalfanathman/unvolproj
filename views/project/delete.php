<div class="w3-row">
	<div class="w3-container w3-quarter"></div>
	<div class="w3-container w3-half">
		<div class='container w3-center'>
		<div class='w3-container w3-card w3-border-theme  w3-black w3-opacity-min w3-bottombar w3-topbar'>
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
		echo  '<br>';
			echo "<form class='' action='?controller=project&action=delete' method='post'>are you sure you want to delete this project ?";
			echo "<select class='w3-select' name='ido'>
		<option value=''>select</option>
		<option value='$id'>YES</option>
		</select>
		<button class='w3-button w3-theme' name='yes'>GO</button>";
			echo "<button class='w3-button w3-theme' name='no'>CANCEL</button></form>"; 
		  		
		?>
		</div></div>	
		<br>
	</div>
	<div class="w3-container w3-quarter"></div>
</div>
</div>
