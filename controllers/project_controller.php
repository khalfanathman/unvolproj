<?php
;
	class ProjectController{

	public function __construct(){
	
	
	}public function add(){
			if(isset($_POST['submit'])){
					$project = Project::add();	
					}
			include('views/project/add.php');		
		} 
		public function view_all_projects(){
		$row = 0;
		$pagenumber = 1;
			   // number of rows per page
            $rowperpage = 10;
         
            if(isset($_POST['num_rows'])){
                $rowperpage = $_POST['num_rows'];
            }

            // Previous Button
            if(isset($_POST['but_prev'])){
                $row = $_POST['row'];
                $row -= $rowperpage;
                 $pgno  -= 1;
                if( $row < 0 ){
                    $row = 0;
                   
                }
            }

            // Next Button
            if(isset($_POST['but_next'])){
                $row = $_POST['row'];
                $allcount = $_POST['allcount'];
                $val = $row + $rowperpage;
                $pagenumber += 1;
                $pgno =  $pagenumber;
                if( $val < $allcount ){
                    $row = $val;
                    
                }
            }	
            $reslt =  Project::rawselect($row,$rowperpage);
            $allcount = Project::pagination();	
			// $projects = Project::view_all_projects();
			require_once('views/project/view_all_projects.php');
		}
		public function pagination(){

		}
		
		public function view(){
			$project = Project::view($_GET['id']);
			require_once('views/project/view.php');
		
		}
		
		public function edit(){
			$id = $_GET['id'];
			if(isset($_POST['submit0'])){
				$project = Project::edit($id);	
				
			}
			else {
				$project = Project::search_result($_GET['id']);
				include_once('views/project/edit.php');
			}
			 
		} 
		public function delete(){
			//$user = User::delete($_GET['id']);

			if(isset($_POST['yes']) && isset($_POST['ido'])){
				//echo "wewe";
				$id = $_POST['ido'];
				$project = Project::delete($id);
			}
			else{
				$project = Project::search_result($_GET['id']);
			}
			require_once('views/project/delete.php');
		}  
		
		public function __destruct(){
	
		}
	}
?>
