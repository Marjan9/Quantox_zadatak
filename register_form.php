<html>
<head>
   <title>Primer HTML forme</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>

<body>
   <div class="col-lg-4" style="margin: 0 auto;margin-top: 50px">
		<h1>User registration:</h1><hr> 
		<form method="POST" action="save_user.php">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="john.doe@gmil.com">
			</div>
			<div class="form-group">
				<label for="first_name">First Name:</label>
				<input type="text" class="form-control" id="first_name" name="first_name" placeholder="John">
				<p></p>
			</div>
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Doe">
				<p></p>
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="text" class="form-control" id="password" name="password" placeholder="123456">
				<p></p>
			</div>
			<div class="form-group">
				<label for="re_password">Re-Type Password:</label>
				<input type="text" class="form-control" id="re_password" name="re_password" placeholder="123456">
				<p></p>
			</div>
			<button type="submit" name="btnSubmit" class="btn btn-primary">Send</button>
       </form>
   </div>
</body>
</html>
