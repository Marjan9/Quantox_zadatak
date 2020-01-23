<html>
<head>
   <title>Primer HTML forme</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>

<body>
   <div class="col-lg-4" style="margin: 0 auto;margin-top: 50px">
       <form method="POST" action="user_login.php">
           <div class="form-group">
               <label for="email">Email:</label>
				<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="john.doe@gmil.com">
           </div>
           <div class="form-group">
               <label for="password"><b>Password</b></label>
               <input type="password" name="password" class="form-control" id="password" placeholder="Password">
           </div>
           <button type="submit" name="btnSubmit" class="btn btn-primary">Send</button>
       </form>
   </div>
</body>
</html>
