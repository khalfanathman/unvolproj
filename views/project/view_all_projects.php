

<script type="text/javascript">
	function printlayer(layr){
		var generator = window.open(",'name,");
		var layetext = document.getElementById(layr);
		generator.document.write(layetext.innerHTML.replace("Print Me"));
		generator.document.close();
		generator.print();
		generator.close();
	}
	$(document).ready(function(){

    // Number of rows selection
    $("#num_rows").change(function(){

        // Submitting form
        $("#form").submit();

    });
});
</script>

<div class="w3-row">
	<div class="w3-container w3-quarter"></div>
		<div  class="w3-container  w3-padding-32 w3-black w3-opacity-min w3-topbar w3-bottombar w3-border-theme" id="div-id-name">
		<table class='w3-table' name='printoo' border='2px'>
			<h3 class="w3-center">PROJECTS</h3> 
		<!--echo "<th>System users</th-->
		<th>Project_no.</th><th>Project_Ref</th><th>Project-Title</th><th>Dates_from_GCF</th><th>Start_Date</th><th>End_Date</th><th>Duration (months)</th>

 <?php
 $sno = $row + 1;
            while($fetch = $reslt->fetch(PDO::FETCH_BOTH)){
                $id  = $fetch['Project_Ref'];
                $ProjectTitle = $fetch['Project_Title'];
                 $DatesfromGCF = $fetch['Dates_from_GCF'];
                $StartDate= $fetch['Start_Date'];
                 $EndDate= $fetch['End_Date'];
                $Duration= $fetch['Duration'];
			echo "<tr>";
			echo "<td>" . $sno. "</td>";
			echo "<td>" . $id. "</td>";	
	  	    echo "<td>" . $ProjectTitle. "</td>";
	  	    echo "<td>" . $DatesfromGCF . "</td>"; 
	  	    echo "<td>" .  $StartDate . "</td>"; 
	  	    echo "<td>" .  $EndDate . "</td>"; 
	  	     echo "<td>" . $Duration  . "</td>";
	 
				echo '<td><a href="?controller=project&action=view&id=' . $id . '" class="w3-button w3-theme">View</a></td>';
				echo '<td><a href="?controller=project&action=edit&id=' . $id . '" class="w3-button w3-theme">edit</a></td>';
				echo '<td><a href="?controller=project&action=delete&id=' . $id . '" class="w3-button w3-theme">Delete</a></td>';
			//}
	  		echo "</tr>";
			$sno ++;
	  	}	
		?>
		</table>
		<a href="#" class="w3-button w3-theme w3-left" id="print" onclick="javscript:printlayer('div-id-name')">Print</a>
		<a href="?controller=project&action=add" class="w3-button w3-theme w3-left" >Add project</a>
	<div class="w3-container w3-quarter"></div>
	<!-- Pagination control -->
        <form method="post" action="" id="form">
            <div id="div_pagination">
            	<br>
            	<div class="pagination">
  				<a href="#" class="active"><?php echo $pagenumber; ?></a>
				</div>
                <input type="hidden" name="row" value="<?php echo $row; ?>">
                <br>
                <br>
                <br>
                <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
                <input type="submit" class="button" name="but_prev" value="Previous">
                <input type="submit" class="button" name="but_next" value="Next">

                <!-- Number of rows -->
                <div class="divnum_rows">
                <span class="paginationtextfield">Number of rows:</span>&nbsp;
                <select id="num_rows" name="num_rows">
                    <?php
                    $numrows_arr = array("10","20","25","50","100","250");
                    foreach($numrows_arr as $nrow){
                        if(isset($_POST['num_rows']) && $_POST['num_rows'] == $nrow){
                            echo '<option value="'.$nrow.'" selected="selected">'.$nrow.'</option>';
                        }else{
                            echo '<option value="'.$nrow.'">'.$nrow.'</option>';
                        }
                    }
                    ?>
                </select>
                </div>
            </div>
        </form>
</div>	
</div>
<style type="text/css">
	#div_pagination{
    width:100%;
    margin-top:5px;
    text-align:center;
}

.button{
    border-radius:3px;
    border:0px;
    background-color:mediumpurple;
    color:white;
    padding:10px 20px;
    letter-spacing: 1px;
}

.divnum_rows{
    display: inline-block;
    text-align: right;
    width: 30%;
}
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>