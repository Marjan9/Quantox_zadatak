<html>
<head>
   <title>Primer HTML forme</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>

<body>
	<div class="col-lg-4" style="margin: 0 auto;margin-top: 30px">
		<h1>Search</h1>
		<div class="search-container">
			<form method="POST" action="search_save.php">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit" name="btnSubmit" class="btn btn-primary" style="padding:5px 0; border:none;">Search</button>
			</form>
		</div>

		</div>
	</div>
</body>
</html>
