<div class="w3-row">
<div class="w3-container w3-quarter"></div>
<div class="w3-container w3-half" style="margin-left : auto; margin-right : auto;">
<form class="w3-container w3-card w3-padding-32 w3-black w3-opacity-min w3-topbar w3-bottombar w3-border-theme" action="?controller=project&action=add" method="post">
	<h2 class="w3-text w3-text-theme">Add Project</h2>
	<label class="w3-small w3-left"><b>Project Ref</b></label>
	<input class="w3-input" required name="name0" type="text" placeholder="Project Ref">
	<label class="w3-small w3-left">Project-Title</label>
	<input class="w3-input" required name="name1" type="text" placeholder="Project-Title">
	<label class="w3-small w3-left">Dates from GCF</label>
	<input class="w3-input" required name="name2" type="date" placeholder="Dates from GCF">	
	<label class="w3-small w3-left">Start Date</label>
	<input class="w3-input" name="name3" type="date" placeholder="Start Date">
	<label class="w3-small w3-left">End Date</label>	
	<input class="w3-input" required name="name4" type="date" placeholder="desired yourname">
	<label class="w3-small w3-left">Duration(months)</label>
	<input class="w3-input" required name="name5" type="text" placeholder="enter months">
	<button class="w3-button w3-left w3-theme" type="submit" name="submit">Add</button>
</form>
<br>
</div>
</div>