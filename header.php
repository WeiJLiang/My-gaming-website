
<?php
session_start();
include 'includes/dbh.inc.php';




?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<div class = "main-wrapper">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
				</ul>
			<div class = "nav-login">
				<?php
				//log out function

				if (isset($_SESSION['u_id']))
				{

					
					echo '<form action="includes/search.php" method="POST">
							<input type="text" name="search" placeholder="Search">
							<button type="submit" name="submit-search">Search</button>
							</form>';


					echo	'<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button></form>';
							
							

				}
				else 
				{
					echo '<form action="includes/login.inc.php" method="POST">
				<input type="text" name="username" placeholder="Username/Email" >
				<input type="password" name="password" placeholder="password" >
				<button type="submit" name="submit">Login</button></form>
				<a href="signup.php">Sign up</a>';
				}
				
					

				?>
			
			</div>
		</div>
		</nav>
	</header>
