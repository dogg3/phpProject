
<?php  
session_start();
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');
$id = $_SESSION['id'];
$query = mysql_query("SELECT * FROM anvand WHERE id='$id'");
$row = mysql_fetch_assoc($query);

  if (!$row['file']) {
        $avatar = "facebook-avatar.jpg";
        }
		else {
             $avatar = $row['file'];
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


<body>

<?php include 'header.php'; ?>
<a href="updateProfile.php">update profile</a>
<div class="col-xs-12" style="background:#e9ebee; padding-bottom:50px; padding-left:0px; padding-right: 0px;">




<div class='profilruta col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0' >

	<div class='row' id='hej'>
		
		
		<!--profilbilden -->
		<div class='col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-1 profilbild'>
		
			<?php echo "<img src='profilePhotos/".$avatar."'> "; ?>
		</div>

		<!--namnet brevid profilbilden -->
		<?php  echo " <h2 class='col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 namnet'>".$row['first']." ".$row['last']."</h2> ";?>
		<div class="col-md-2 col-xs-4 col-xs-offset-4 col-md-offset-0 updateProfile"><a class='litenTextProfilRuta' href='updateProfile.php'>Update Info</a></div>

	</div>
		
	<ul class="profilNav">
		<li>About</li>
		<li>Carrer Stats</li>
		<li>Academics</li>
		<li>Accolades</li>
		<li>Videos</li>
			<li>Photos</li>
	</ul>
</div>





<div class='profilruta col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0' >
	
	<div class='row'>
		<ul class='col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3'>
	
<?php

echo "
		<li>name:  ".$row['first']."</li>
		<li>position:  ".$row['position']."</li>
		<li>foot:  ".$row['foot']."</li>
		<li>club/school: ".$row['club']."</li>
		<li>year joining club: ".$row['startYearClub']."</li>
		<li>games played: ".$row['gamesPlayed']."</li>
		<li> goals scored: ".$row['goals']."</li>
		<li>assists: ".$row['assists']."</li>
		</ul>
	</div>

	
</div>
<div class='profilruta col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0' style='padding-bottom:40px; padding-top:20px' >
	<h4 style='text-align:center;' class='col-xs-6 col-xs-offset-3'>highlight video</h4>
	<iframe class='col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2' style='padding:0px; height:50%;'
src='".$row['video']."'>
</iframe>
</div>";



 ?>
				</div>



	

</body>
</html>
