<?php 

session_start(); 

if (isset($_SESSION['connec']) && $_SESSION['connec'] == true){
		
	header('Location: menu.php');
}

?>

<!DOCTYPE html>
<html>
	
	<link href="css/register.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarNav">
    			<ul class="navbar-nav">
      				<li class="nav-item">
        				<a class="nav-link" href='index.php'>Login</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href='register.php'>Register</a>
      				</li>
    			</ul>
  			</div>
		</nav>	  
		
		<form method="post" action="login.php" class="form-signin">
			<div>
				<h1 class="title">HEIG STI</h1>
				<input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Pseudo" required autofocus>
                <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Password" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
			</div>
		</form>
	</body>
</html>