<?php
class notif{
	public function avail(){
		$id = $_SESSION['id'];
		$sql = "select * from pgd.notification where to_ID = ' $id ' and status = 'unread'";
		$result = DB::db_query($sql);
		$not = $result->rowCount();	
		return $not;
	}
	public function show_all($id){
		$id=$_SESSION['id'];
		$sql = "select * from pgd.notification where to_ID = ' $id '";
	    $result = DB::db_query($sql);
		$notifs = $result->fetchAll();	
		return $notifs; 		
	}	
}
?>