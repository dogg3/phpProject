<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="loginsql.css" rel="stylesheet">
</head>
<body>

<?php include 'header.php' ?>

<?php 

session_start();



mysql_connect("localhost", "root", "");
mysql_select_db('logintest');

//$search = $_POST['']


?>
<div id="archive" class=" col-xs-12">
<div class="col-xs-12 col-md-12 col-md-offset-0">


<form method="post" class=" col-xs-12 col-md-8 col-md-offset-2" >
	<p style="font-variant: small-caps">last name</p> <input type="text" name="last" >
	<p style="font-variant: small-caps">position</p> <input type="text" name="position" >
	<!--position<input type="text" name="position" >-->
	<input type="submit" value="search" name="submit">
</form>



<div class="col-xs-12 col-md-8 col-md-offset-2">

<?php  

		if (isset($_POST['last'])) {
		$last = $_POST['last'];
		



		//qyerry database
		$sql = "SELECT * FROM `anvand` WHERE `last` = '$last' ";
		//skicka sql till databasen och hämta information
		$query = mysql_query($sql);

		while ($array = mysql_fetch_assoc($query)) {

			echo "<div style='padding:10px; ' class=' col-xs-offset-0 col-xs-4 col-md-3 col-md-offset-0'>
			    <div style='padding: 0px;' class='bilderna col-xs-12'>
			      <img style='width:100%; height:80%;' src='profilePhotos/".$array['file']."'>
			      <div id='bildText'><a href='user.php?id=".$array['id']."'> ".$array['first']." ".$array['last']."</div>
			    </div>
			  </div>";


	}
	}


if (isset($_POST['submit'])) {
		
		$position = $_POST['position'];



		//qyerry database
		$sql = "SELECT * FROM `anvand` WHERE  `position`= '$position' ";
		//skicka sql till databasen och hämta information
		$query = mysql_query($sql);

		while ($array = mysql_fetch_assoc($query)) {

			echo "<div style='padding:10px; ' class=' col-xs-offset-0 col-xs-4 col-md-3 col-md-offset-0'>
			    <div style='padding: 0px;' class='bilderna col-xs-12'>
			      <img style='width:100%; height:80%;' src='profilePhotos/".$array['file']."'>
			      <div id='bildText'><a href='user.php?id=".$array['id']."'> ".$array['first']." ".$array['last']."</div>
			    </div>
			  </div>";


	}
	}


//if (isset($_POST['last'])) {
//	$last = $_POST['last'];
	

//	echo $last;
//}

?>


</div>
</div>
</div>

<?php include 'footer.php' ?>s
</body>
</html>