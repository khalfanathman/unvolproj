<?php
	//require_once('../unv/notif.php');
	$id = $_SESSION['id'];
	$rl = $_SESSION['role'];
	$ses = $_SESSION['name'];
	if($rl == 7 || $rl == 5){?>		
	<nav class='w3-container w3-bar w3-large w3-theme-d2' style='height : auto;width : 100% ' >
		<a href='/unv' class='w3-mobile w3-button w3-hover-white'>HOME</a>
		<a href='?controller=project&action=view_all' class='w3-mobile w3-button w3-hover-white'>BRANCHES</a>
		<!-- <a href='' class='w3-mobile w3-button w3-hover-white'>SENATE</a> -->
		<a href='?controller=faculty&action=view_all' class='w3-mobile w3-button w3-hover-white'>PROJECTS</a>
		<a href='?controller=project&action=view_all_projects'></a>
		
		 <div class='w3-dropdown-hover w3-right'>
		 <button class='w3-button'>
			<?php	//$id = $_SESSION['id'];
				//$ses = $_SESSION['name'];
				if($ses != ' '){
					echo $ses ;
				}
				else { 
					echo 'MyIUA<br>'; 
				}  ?> 
		</button>
		  	<div class='w3-dropdown-content w3-bar-block w3-border' style='right:25px'>
				<a href='http://localhost/unv/index.php?controller=project&action=home' class='w3-bar-item w3-button w3-theme' style='margin-right:-20px'>MyHome<i class='far f508'></i></a>
		<?php echo '	<a href="?controller=project_profile&action=view&id='. $_SESSION['id']. '" class="w3-bar-item w3-button w3-theme" style="margin-right:-20px">MyProfile<i class="far f508"></i></a>';?>
				<a href='?controller=project&action=logout' class='w3-bar-item w3-button w3-black'>Logout</a>	
		  	</div>
		</div>
		<span class='w3-button w3-right'><i class='far fa-envelope'></i></span>
		
		<div class='w3-dropdown-hover w3-right'><button class='w3-button'><i class='fas fa-globe'><?php $n = new notif();
			$not = $n->avail();
			if($not > 0){?>
				<span class='w3-text w3-small w3-opacity'><?php echo $not; } ?></span></i></button>
				<div class='w3-dropdown-content w3-theme'>
					<?php
						$noti =  $n->show_all($id);
						foreach($noti as $no){
							echo "<span class='w3-center'>" .$no[3] ." <a href='?controller=notification&action=view&id=" . $no[0] . "'>view</a></span><br>";
						}
					?>
				</div>	
		</div>

		<a href='?controller=project&action=add' class='w3-button w3-right'>REGISTER</a>
				
	</nav>
	<?php }  
	 else if($_SESSION['name'] == ' ') {?>
		<nav class='w3-container w3-bar w3-large w3-theme-d2' style='height : auto;width : 100% ' >
		<a href='/unv' class='w3-mobile w3-button w3-hover-white'>HOME</a>
		<a href='?controller=project&action=view_all_projects' class='w3-mobile w3-button w3-hover-white'>PROJECTS</a>
		
		 <div class='w3-dropdown-hover w3-right'>
		 <button class='w3-button'>
				
 				<?php	echo "<i class='fas fa-user-cog'></i><br>"; ?>
				   
	</button>
		  	<div class='w3-dropdown-content w3-bar-block w3-border' style='right:25px'>
				<a href='?controller=user&action=index' class='w3-bar-item w3-center w3-button w3-theme'><i class='fas fa-user-tie'></i>   Login </a>
				<a href='?controller=user&action=add' class='w3-bar-item w3-button w3-center w3-black'><i class='fas fa-user-plus'></i>     Register</a>	
		  	</div>
		</div> 
		<a href='?controller=user&action=add' class='w3-button w3-right'><i class='fas fa-envelope'></i></a>
		<a href='?controller=user&action=add' class='w3-button w3-right'><i class='fas fa-globe'></i></a>			
	</nav>
	<?php }

	else {?> 
	<nav class='w3-container w3-bar w3-large w3-theme-d2' style='height : auto;width : 100% ' >
			<a href='/unv' class='w3-mobile w3-button w3-hover-white'>HOME</a>
			<div class='w3-dropdown-hover w3-right'>
		 <button class='w3-button'> 
			
			<?php	 //$ses = $_SESSION['name'];
				 if($ses != ' '){
					echo $ses ;
				}
				else { 
					echo 'MyIUA<br>'; 
				}   ?>
		</button>
		  	<div class='w3-dropdown-content w3-bar-block w3-border' style='right:20px'>
		  		<a href='http://localhost/unv/index.php?controller=project&action=home' class='w3-bar-item w3-button w3-theme' style='margin-right:-20px'>MyHome<i class='far f508'></i></a>
				<a href='?controller=user_profile&action=view&id=<?php echo $id; ?>' class='w3-bar-item w3-button w3-theme'>MyIUA</a>
				<a href='?controller=project&action=logout' class='w3-bar-item w3-button w3-black'>Logout</a>	
		  	</div>
		</div> 		
		<span class='w3-button w3-right'><i class='fas fa-envelope'></i></span>
		
		<div class='w3-dropdown-hover w3-right'><button class='w3-button'><i class='fas fa-globe'><?php $n = new notif();
			$not = $n->avail();
			if($not > 0){?>
				<span class='w3-text w3-small w3-opacity'><?php echo $not; } ?></span></i></button>
				<div class='w3-dropdown-content w3-theme'>
					<?php
						$noti =  $n->show_all($id);
						foreach($noti as $no){
							echo  $no[3] . " <a href='?controller=notification&action=view&id=" .$no[0] ."'>view</a><br>";
						}
					?>
				</div>	
		</div>
	</nav> 
	<?php }

?>
