<div class="w3-row">
	<div class="w3-container w3-quarter"></div>
		<div  class="w3-container w3-half w3-card w3-padding-32 w3-black w3-opacity-min w3-topbar w3-bottombar w3-border-theme">
		<table class='w3-table' border='0px'>
		<!--echo "<th>System users</th-->
		<th>USER ID</th><th>FIRST NAME</th><th>MIDDLE NAME</th><th>LAST NAME</th><th>SURNAME</th>
		<?php foreach($users as $user){
			$id = $user->id;
			echo "<tr>";
			echo "<td>" . $id . "</td>";	
	  	    echo "<td>" . $user->f_name . "</td>";
	  	    echo "<td>" . $user->m_name . "</td>"; 
	  	    echo "<td>" . $user->l_name . "</td>"; 
	  	    echo "<td>" . $user->s_name . "</td>"; 
	  	  //  echo "<td>" . $user->mail . "</td>"; 
	  	   // echo "<td>" . $user->status . "</td>"; 
	    	//echo "<td>" . $user->type . "</td>";
	  		//if ($role = 5 or 7){
				echo '<td><a href="?controller=user&action=view&id=' . $id . '" class="w3-button w3-theme">View</a></td>';
			
			//}
	  		echo "</tr>";}
		?>
		</table>
	<div class="w3-container w3-quarter"></div>
</div>	
</div>