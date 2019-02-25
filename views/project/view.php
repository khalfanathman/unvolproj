<div class="w3-row">
	<div class="w3-container w3-quarter"></div>
	<div class="w3-container  w3-card w3-padding-32 w3-black w3-opacity-min w3-topbar w3-bottombar w3-border-theme">

		<?php
			$id = $project[0];
			$f_name = $project[1];
			$m_name = $project[2];
			$l_name = $project[3];	
			$s_name = $project[4];
			$u_name = $project[5];	
			//$=$user[4];
				echo "<br><table class='w3-table' border='0px'>";	
				echo "<tr>";	
				echo "<td>Project Ref</td><td>" . $f_name . "</td><td><a href='?controller=project&action=delete&id=" . $id . "' class='w3-button w3-theme' style = 'width: 100%'>Delete</button></td></tr>";
				echo "<td>Project-Title </td><td>" . $m_name . "</td><td><a href='?controller=project&action=edit&id=" . $id . "' class='w3-button w3-theme' style = 'width: 100%'>Edit</button></td></tr>";
				echo "<td>Dates from GCF</td><td>" . $l_name . "</td><td><button class='w3-button w3-theme' style = 'width: 100%' name='location'>Project location</button></td></tr>";	
				echo "<td>Start Date</td><td>" . $s_name . "</td><td><a href='?controller=project&action=confirm&id=" . $id . "' class='w3-button w3-theme' style = 'width: 100%'>Project status</button></td></tr>";
				echo "<td>End Date</td><td>" . $s_name . "</td><td><a href='?controller=project&action=confirm&id=" . $id . "' class='w3-button w3-theme' style = 'width: 100%'>Project expenses</button></td></tr>";
			
				//echo "Middle Name " . $mail  . "<br>";
				echo "</tr>";
				echo "</table><br>";
		?>
	<div class="w3-container w3-quarter"></div>
</div>	
	</div>
