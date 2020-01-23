<?php 
if(!require_once('db.php')){
	die("Učitavanje fajla za konekciju nije uspleo");
}

$db = new DB();

	function login(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
		$query = DB::$conn->prepare('SELECT * FROM users WHERE email = ?');
        $query->execute([$email]);
        $user = $query->fetchAll(PDO::FETCH_ASSOC);
    
        $is_pass_correct = password_verify($password, $user[0]['password']);
        if(!$is_pass_correct){
			header('Location: http://localhost/quantox_zadatak/login_form');
		}else{
			header('Location: http://localhost/quantox_zadatak/search');
		}
    }
	login();
?>