<?php

include('db.php');

$db = new DB();

	
	function get_results(){
        $search = "%" . $_POST['search'] . "%";
        $query = DB::$conn->prepare('SELECT * FROM users WHERE users.username LIKE ? or users.email LIKE ?');
        $query->execute([$search, $search]);
        $schedule = $query->fetchAll(PDO::FETCH_ASSOC);
		echo "<pre>";
		var_dump($schedule);
		echo "</pre>";
		
	}
		get_results();
    


?>