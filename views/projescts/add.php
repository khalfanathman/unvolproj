<div class="w3-row">
<div class="w3-container w3-quarter"></div>
<div class="w3-container w3-half" style="margin-left : auto; margin-right : auto;">
<form class="w3-container w3-card w3-padding-32 w3-black w3-opacity-min w3-topbar w3-bottombar w3-border-theme" action="?controller=user&action=add" method="post">
	<h2 class="w3-text w3-text-theme">Register User</h2>
	<label class="w3-small w3-left"><b>First Name</b></label>
	<input class="w3-input" required name="name0" type="text" placeholder="first name">
	<label class="w3-small w3-left">Middle Name</label>
	<input class="w3-input" required name="name1" type="text" placeholder="middle name">
	<label class="w3-small w3-left">Last Name</label>
	<input class="w3-input" required name="name2" type="text" placeholder="last name">	
	<label class="w3-small w3-left">Surname</label>
	<input class="w3-input" name="name3" type="text" placeholder="surname (optional)">
	<label class="w3-small w3-left">Userame</label>	
	<input class="w3-input" required name="username" type="text" placeholder="desired yourname">
	<label class="w3-small w3-left">Email</label>
	<input class="w3-input" required name="mail" type="text" placeholder="enter your valid e-mail">
	<label class="w3-small w3-left">Password</label>
	<input class="w3-input" required name="password0" type="password" placeholder="password">
	<label class="w3-small w3-left">Confirm Password</label>
	<input class="w3-input" required name="password1" type="password" placeholder="confirm password" required>
	<label class="w3-small w3-left">Title</label>	<select class="w3-select" name="role">
		<option value="">select your title</option> 
		<!--option value="1">Councilor</option>
		<option value="2">Deputy Vice Councilor Educational</option>
		<option value="3">Deputy VC Financial</option>
		<option value="4">PG Dean</option>
		<option value="5">PG Registrar</option-->
		<option value="6">Head of PostGraduate Department</option>
		<option value="7">PostGraduate Staff</option>
		<option value="8">Dean of Faculty</option>
		<option value="9">Registrar of Faculty</option>
		<option value="10">Coordinator of Faculty</option>
		<option value="11">Head of Faculty Department</option>
		<option value="12">Faculty Staff/Tutor</option>
		<option value="13">Student</option>
	</select>
	<label class="w3-small w3-left">gender</label>
		<select class="w3-select" name="gender">
		<option value="">select gender</option> 
		<option value="female">female</option>
		<option value="male">male</option>
	</select>
	<br>
	<button class="w3-button w3-left w3-theme" type="submit" name="submit">REGISTER</button>
</form>
<br>
</div>
</div>