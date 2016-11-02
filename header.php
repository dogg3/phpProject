	<?php 

mysql_connect("localhost", "root", "");
mysql_select_db('logintest');
if (isset($_SESSION['id'])) {
$id = $_SESSION['id'];

$query = mysql_query("SELECT * FROM anvand WHERE id='$id'");
$row = mysql_fetch_assoc($query);

if (!$row['file']) {
        $avatar = "facebook-avatar.jpg";
        }
		else {
             $avatar = $row['file'];
             }

             }
	 ?>
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
     




<script type="text/javascript">
	

var kuk = 0;
function menySlider() {
		var meny = document.getElementById("meny");
	if (kuk > 1){ kuk = 0};
	if(kuk == 0){meny.style.marginLeft = "0px";};
	if (kuk == 1) {meny.style.marginLeft = "-210px";};
	kuk++;


}
</script>








		</head>


<body onload="inlogg()">

<div class="col-xs-12 header">
		<!-- meny-php -->
		<div class="visainlogg col-xs-2 col-sm-6 col-md-8 ">
		<div id="menyBild" onclick="menySlider()"><img src="menu.png"></div>
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

<div class="menySlider" id="meny">
		


		<ul> 

			<?php if (!isset($_SESSION['id']))

		{ echo "	<li id='firstLi' ><img class='menyPP' src='animations/home.png'> <a href='index.php'>home</a></li>

		<li style='margin-bottom:0px;'><img class='menyPP' src='animations/PenPaper.png'> <a href='registrera.php'>register</a></li><br>
	
<br>
		";} 

		else {
			
			echo "


			<li id='firstLi'><img class='menyPP' src='profilePhotos/".$avatar."'> <a style='font-size:14px; font-variant:none;' href='profile.php'>".$row['first']." ".$row['last']."</a></li>
			<li> <img style='width:3px;' class='menyPP' src='animations/RedPen.png '> <a href='updateProfile.php'>update profile</a></li>

			";
		}


		?>	
	
			
			<li><img class="menyPP" src="animations/archives.png "> <a href="archive.php">player-archive</a></li>
		
	
<li style="border:1px solid #e0e0e0; width:105%; margin-left: -10%;"></li>

			
					
			</ul>

</div>

		</body>
		</html>
	