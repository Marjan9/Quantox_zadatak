<?php
if(!require_once('db.php')){
	die("Učitavanje fajla za konekciju nije uspleo");
}

$db = new DB();

function register(){
	$email		 = $_POST['email'];
	$first_name	 = $_POST['first_name'];
	$username	 = $_POST['username'];
	$password	 = $_POST['password'];
	$re_password = $_POST['re_password'];
	
	var_dump($_POST);
	
	if(empty($email) || empty($first_name) || empty($username) || empty($password) || empty($re_password)){
		echo "<h3>All fields must be filled in, check your details</h3>";
		exit;
	}
	if(!preg_match('/^[a-zA-Z0-9\.\-]+@[a-zA-Z0-9\.\-]+$/', $email)){
		echo "<h3>Email is not in the correct format!</h3>";
		exit;
	}
	if(!preg_match('/^[A-Z][a-z]{2,}$/', $first_name)){
		echo "<h3>The name must contain at least 3 letters, with the initial big one!</h3>";
		exit;
	}
	if(!preg_match('/^[A-Z][a-z]{2,}$/', $username)){
		echo "<h3>The username must contain at least 3 letters, with the initial big one!</h3>";
		exit;
	}
	if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{4,12}$/', $password)){
		echo "<h3>The password must be at least one number, one letter and 4-12 characters!</h3>";
		exit;
	}
	
	
        $query = DB::$conn->prepare('SELECT * FROM users WHERE users.username = ?');
        $query->execute([$username]);
        $username_exists = $query->fetchAll(PDO::FETCH_ASSOC);
        
        if($password !== $re_password){
            header('Location: http://localhost/quantox_zadatak/login_form');
            exit();
        }

        if($username_exists){
            header('Location:http://localhost/quantox_zadatak/login_form');
            exit();
        }
        $enc_pass = password_hash($password , PASSWORD_BCRYPT);

        $query = DB::$conn->prepare('insert into users (first_name,email,username,password) values (?,?,?,?)');
        $edit_user=$query->execute([$first_name,$email,$username,$enc_pass]);
        if ($edit_user){
            header('Location: http://localhost/quantox_zadatak/login_form');
        }
        
    }
	register();
	
	
	
?>