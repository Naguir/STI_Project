<?php 

session_start(); 

if (isset($_SESSION['connec']) && $_SESSION['connec'] == true){
		
	header('Location: menu.php');
}

if(isset($_SESSION['fail']) && $_SESSION['fail'] == true){

	$message='Pseudo already exist';
	echo '<script type="text/javascript">alert("'.$message.'");</script>';
}

?>

<!DOCTYPE html>
<html>
	
	<link href="css/register.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<body>

		<div class="center">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarNav">
    			<ul class="navbar-nav">
      				<li class="nav-item">
        				<a class="nav-link" href='register.php'>Register</a>
      				</li>
    			</ul>
  			</div>
		</nav>	  
		
		<form method="post" action="newregister.php" class="form-signin">
			<div>
				<h1 class="title">HEIG STI</h1>
					<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname" value="<?php echo $_SESSION['firstname']; ?>" required autofocus>
					<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname" value="<?php echo $_SESSION['lastname']; ?>" required>
					<input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Pseudo" required>
                	<input type="password" name="passwd1" id="passwd1" class="form-control" placeholder="Password" required>
                	<input type="password" name="passwd2" id="passwd2" class="form-control" placeholder="Repeted Password" required>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
			</div>
		</form>
	</body>
</html>