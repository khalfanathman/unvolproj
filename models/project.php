<?php
//include ("../../pgd/vires.php");
class Project{
	//this is class for users
	//this class allows us to login into system and manipulate user basic data
	//pgd/models/user.php 
	public  $id;
	public  $f_name;
	public  $m_name;
	public  $l_name;	
	public  $s_name;
	public  $u_name;
	public  $mail;
	public  $password;
	public  $type;
	public  $status;
	public   $raw;
	public  $rowperpage;
	public  $pagenumber;
	//opening class DB in connection to connect with database
	// av made the connection public to be accessed by any methode

	public function __construct($id,$f_name,$m_name,$l_name,$s_name,$u_name){
	//public function __construct(){
			
		$this->id = $id;
		$this->f_name = $f_name;
		$this->m_name =$m_name;  
		$this->l_name=  $l_name;	
		$this->s_name=  $s_name;
		$this->u_name=  $u_name;
	
	}

	public function add(){
       //echo "stART USER";
		$f_name = $_POST['name0'];
		$m_name = $_POST['name1'];
		$l_name = $_POST['name2'];
		$s_name = $_POST['name3'];
		$u_name = $_POST['name4'];
		$q_name = $_POST['name5'];
		//$db = DB::connect();
		$sql = "INSERT INTO unvol.project_info  (Project_Ref,Project_Title,Dates_from_GCF,Start_Date,End_Date, Duration) VALUES ('$f_name',' $m_name ',' $l_name ',' $s_name ',' $u_name ','$q_name ')";
		try{		
			$result = DB::db_query($sql);
			
			if($result->rowCount()>0){
			echo "<div class='w3-container w3-half w3-green w3-display-middle'>
	  				<h3>Success!</h3>
	  				<p>Project has been added successfully.</p>
					</div>";
				//echo $id;
			}

			
		}
		catch(PDOException $e) {
			echo "<div class='w3-container w3-red w3-half w3-display-middle'>
  				<h3>Error</h3>
				<p>There is an error.</p>" . $e->getMessage() . 
				"</div>";
		}   
	}
	public function pagination(){
		  $sql = "SELECT COUNT(*) AS cntrows FROM unvol.project_info";
            $result = DB::db_query($sql);
            $fetchresult = $result->fetch(PDO::FETCH_BOTH);
            $allcount = $fetchresult['cntrows'];

      return $allcount;
	}


	public function rawselect($row,$rowperpage){
		
		// selecting rows
            $sql = "SELECT * FROM unvol.project_info  ORDER BY Project_Ref ASC limit $row,".$rowperpage;
            $reslt = DB::db_query($sql);
            
           
            return $reslt;
	}

	
	public function view_all(){
		
		$sql = "select * from pgd.users";
	    $result = DB::db_query($sql);
		
		$users = $result->fetchAll();

		return $users; 		
	}
	public function delete($id){
		
		$sql = "delete from unvol.project_info where Project_Ref = '$id' ";
		$result = DB::db_query($sql);
  
		if($result){
			echo "user deleted";
		}
			
	}
	public function edit($id){
		$f_name = $_POST['name1'];
		$m_name = $_POST['name2'];
		$l_name = $_POST['name3'];
		$s_name = $_POST['name4'];
		$u_name = $_POST['name5'];

		$sql = "UPDATE unvol.project_info SET Project_Title = ' $f_name ',Dates_from_GCF = ' $m_name ',Start_Date = ' $l_name ', End_Date = ' $s_name ', Duration = ' $u_name ' where Project_Ref = '$id'";
	
		try{		
			$result = DB::db_query($sql);
		
			if($result->rowCount()>0){
			
				echo "<div class='w3-container w3-half w3-green w3-display-middle'>
  					<h3>Success!</h3>
  					<p>User has been edited successfully.</p>
					</div>";
			}
		}
		catch(PDOException $e) {
			echo "<div class='w3-container w3-red w3-half w3-display-middle'>
  				<h3>Error</h3>
				<p>There is an error.</p>" . $e->getMessage() . 
				"</div>";
		}
	
	}
	

	public function view($id){	
		$id=$_GET['id'];
		$sql = "SELECT * FROM unvol.project_info WHERE Project_Ref  =  '$id' ";
		$result = DB::db_query($sql);
  
		$project = $result->fetch();
		
		if($project){
			
		}
		return $project;
	}
	

	
	public function __destruct(){
	
	
	}
	
	
}
?>
