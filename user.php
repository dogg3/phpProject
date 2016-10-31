<?php  

include 'dbh.php';
 
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

		</head>


<body>

<?php include 'header.php'; ?>
<a href="updateProfile.php">update profile</a>
<div class="col-xs-12" style="background:white; padding-bottom:50px; padding-left:0px; padding-right: 0px;">


<?php




if (isset($_GET['id'])) {
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');
$id  = mysql_real_escape_string($_GET['id']);
$query = mysql_query("SELECT * FROM anvand WHERE id='$id'");
$row = mysql_fetch_assoc($query);

if (!$row['file']) {
        $avatar = "facebook-avatar.jpg";
        }
		else {
             $avatar = $row['file'];
             }

echo "<div class='profilruta col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0' >
	
	<div class='row'>
		<div class='col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5 profilbild'><div class='updatePP'>change pp</div><img src='profilePhotos/".$avatar."'></div>
	


	</div>

	<div class='row'>
		<ul class='col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3'>
	
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

	<h4 style='text-align:center;' class='col-xs-6 col-xs-offset-3'>highlight video</h4>
	<iframe class='col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2' style='padding:0px; height:50%;'
src='".$row['video']."'>
</iframe>
</div>";





















    }
    else {
        echo "member does not exist with ID";
    }

?>

</div>
	<?php include 'footer.php' ?>
		</body>
		</html>







