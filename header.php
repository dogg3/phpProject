	
<!DOCTYPE html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LOG IN</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="loginsql.css" rel="stylesheet">

		</head>


<body>

<div class="col-xs-12 header">
		<!-- meny-php -->
		<div class="visainlogg col-xs-2 col-sm-6 col-md-8 ">
		<ul> 
		<li><a href="index.php">home</a></li>
			<li><a href="archive.php">player-archive</a></li>
		
		<?php if (!isset($_SESSION['id']))

		{ echo "<li><a href='registrera.php'>register</a></li>
		
				
		";} 

		else {
			echo "<li><a href='profile.php'>profile</a></li>";
		}


		?>	


			
					
			</ul>
		</div>



<?php 
		if (isset($_SESSION['id'])) {
				
								echo "<form class='loggain col-xs-6 col-xs-offset-0  col-sm-4 col-md-3' action='logout.php' method='POST'>
		
				<button class='col-xs-6 col-sm-4 col-md-4'  class='button' type='submit'>log out</button>
	 
</form>";
	echo $_SESSION['row']; 
				echo " is logged in";
			}
			
			else {
	echo "<form class='loggain col-xs-10  col-sm-6 col-md-4 ' action='login.php' method='POST'>
						<input class='col-xs-4'  type='text' name='uid' placeholder='username'>
						<input class='col-xs-4'  type='password' name='pwd' placeholder='password'>
						<button class='col-xs-3'  class='button' type='submit'>log in</button>
					</form>";

			}
?>

		</div>


		</body>
		</html>
	