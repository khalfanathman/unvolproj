<?php
	class ProjectController{

	public function __construct(){
	
		//$this->id = $id;
		//echo "a user object is constructed <br/>";
	
	}
		public function index(){
			
			
				$user = User::index();
				header('location:?controller=user&action=home');

		}
		
		public function logout(){
			if(isset($_POST['yes'])){
				header('location:index.php');
				$user = User::logout();
			}
			include('views/user/logout.php');
		
		}		

		public function add(){
		
			if(isset($_POST['submit'])){
				$email = $_POST['mail'];
				if(filter_var($email, FILTER_VALIDATE_EMAIL) == true)
				{
					$user = User::add();

				}else echo "<script> alert('invalid email')</script>";
			
				
					
			}
			//else echo "hey";
			//$u = new User();
			//$user = $u->add();
			
			include('views/user/add.php');
			//echo "this fx is for new user<br/>";
		
		} 
		public function view_all_students(){
			//$u = new User();			
			$users = User::view_all_students();
			require_once('views/user/view_all_students.php');
		}
		public function view_all(){
			//$u = new User();			
			$users = User::view_all();
			require_once('views/user/view_all.php');
		}
		public function view(){
			$user = User::view($_GET['id']);
			require_once('views/user/view.php');
		
		}
		public function home(){
			if($_SESSION['name']!=" "){
				$user = User::home($_SESSION['id']);	
			}
			else $user = User::index();
			require_once('views/user/home.php');
			//echo "fx for signing in user</br>";
		}
		public function added(){
			//$u = new User();			
		/*	$users = User::view_alls();
			require_once('views/user/view_alls.php');*/
		}
		public function edit(){
			$id = $_GET['id'];
			if(isset($_POST['submit0'])){
				$sub = 0;
				$user = User::edit($id);
					
			}
			else if(isset($_POST['submit1'])){
				$sub = 1;
				$user = User::edit($id);
					
			}
			else if(isset($_POST['submit2'])){
				$sub = 2;
				$user = User::edit($id);
					
			}
			else {
				$user = User::search_result($_GET['id']);
				include_once('views/user/edit.php');
			}
			//echo "this fx is for editing user<br/>"; 
		} 
		public function search(){
			
			if(isset($_POST['submit'])){
				//$search = $_POST['search'];			
				$id = User::search();
					
			}
		//user = User::search();			
			require_once('views/user/search.php');
			//ho "this fx is for searching user<br/>"; 
		}
		public function search_result(){
			if(!isset($_GET['id']))
				call('pages','error');
			else{
				$user = User::search_result($_GET['id']);
				require_once('views/user/search_result.php');
			
			}
			
				
			//echo "this fx is for deleting user<br/>"; 
		} 
		public function delete(){
			//$user = User::delete($_GET['id']);

			if(isset($_POST['yes']) && isset($_POST['ido'])){
				//echo "wewe";
				$id = $_POST['ido'];
				$user = User::delete($id);
			}
			else{
				$user = User::search_result($_GET['id']);
			}
			require_once('views/user/delete.php');
		} 
		public function block(){
			if(isset($_POST['yes']) && isset($_POST['ido'])){
				//echo "wewe";
				$id = $_POST['ido'];
				$user = User::block($id);
				
			}
			else{
				$user = User::search_result($_GET['id']);
				require_once('views/user/block.php');			
			}
			
		} 
		
		public function __destruct(){
	
		}
	}
?>
