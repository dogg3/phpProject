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
		
		<div class="col-xs-2 col-md-2" >
			<a href="index.php"><img style="height:40px; width:40px; margin-top: 5px; " src="playerlotLogoLiten.png"></a>

		</div>
		<div class="pull-right" style="padding-right: 20px; margin-top: 5px;" class="visainlogg col-xs-2 col-xs-offset-8 col-md-offset-8 ">
		<div  id="menyBild" onclick="menySlider()"><img src="menu.png" style="height:40px; width:40px;"></style></div>
		</div>




		</div>

<div class="menySlider" id="meny">
		


		<ul> 

			<?php if (!isset($_SESSION['id']))

		{ echo "	
<form  action='login.php' method='POST' style='padding-top:20px;'>
					

						<input   type='text' name='uid' placeholder='username'>
						<input   type='password' name='pwd' placeholder='password'><br>
						<button class='logitout col-xs-10 col-sm-10 col-md-10'  type='submit'>log in </button>
					</form>


		<li id='firstLi' ><img class='menyPP' src='animations/home.png'> <a href='index.php'>home</a></li>

		<li style='margin-bottom:0px;'><img class='menyPP' src='animations/PenPaper.png'> <a href='registrera.php'>register</a></li><br>
	<li style='margin-top:20px;'><img class='menyPP' src='animations/archives.png '> <a href='archive.php'>player-archive</a></li>




		";} 

		else {
			
			echo "

		<li id='firstLi'><img class='menyPP' src='profilePhotos/".$avatar."'> <a style='font-size:14px; font-variant:none;' href='profile.php'>".$row['first']." ".$row['last']."</a></li>
			
			<li style=''> <img style='width:3px;' class='menyPP' src='animations/RedPen.png '> <a href='updateProfile.php'>update profile</a></li>
<li><img class='menyPP' src='animations/archives.png '> <a href='archive.php'>player-archive</a></li>
		<form action='logout.php' method='POST' style='margin-bottom:20px;'>
		
				<button class='logitout col-xs-10 col-sm-10 col-md-10'  class='button' type='submit'>log out</button>
	 
</form>
			";
		}


		?>	
	
			
			


			
					
			</ul>

</div>

		</body>
		</html>

		

	