
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


<<<<<<< Updated upstream
=======
<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
     <script type="text/javascript">


//$(document).ready(function(){
//	console.log("ready");
//	$("#season").css("visibility", "hidden");

//});

$(document).ready(function() {

	var isDirty = false;





	$('select').on('change', function() {
		

	
		var year = $(this).val();
			$.ajax({
				method: "post",
				url: "season.inc.php",
				data: {year:year}
			})
			.done(function(data){
				$("#season").html(data);
			})
		
  		
		});

$('#season').load('season.inc.standard.php');

});



</script>

     </head>


>>>>>>> Stashed changes
<body>

<?php include 'header.php'; ?>

<div class="col-xs-12" style="background:#e9ebee; padding-bottom:0px; padding-left:0px; padding-right: 0px;">



<<<<<<< Updated upstream
<div class='profilruta col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0' >
=======
<div class='profilruta col-xs-12 col-md-10 col-md-offset-1 col-xs-offset-0' >
>>>>>>> Stashed changes

	<div class='row' id='hej'>
		
		
	

		<!--namnet brevid profilbilden -->
		<?php  echo " <h2 class=' pull-right col-xs-12 col-xs-offset-0 col-sm-5 col-sm-offset-0  namnet'> ".$row['first']." ".$row['last']."</h2> ";?>
			

		<div  class="kortet col-xs-10 col-xs-offset-2 col-md-offset-2 "  >
			<?php $_age = floor((time() - strtotime($row['years'])) / 31556926);
		 	echo "<div style='float:left;'class='kortetAge '>".$_age."<br><img class='flaggan'  src='animations/".$row['country']."Flag.png'></div>
			<img class='ppKortet' class='kortetImg' src='profilePhotos/".$avatar."'> "; ?>
			<br>
			<h3 class="kortetPos"><?php echo $row['position'] ?></h3>

			<h5  style="  text-align: center;   "><?php echo $row['club'] ?></h5>
		</div>


		

	</div>



		<br>

<div class="row fint"  style="background-color: rgb(70, 128, 132);;">
	
	<div   class="col-xs-11 col-xs-offset-1 col-sm-4  col-sm-offset-7  ">
		<img style="border:0px; padding:0px; height:40px; width:55px; margin-top:8px; float: left;" class="undreBild"    src="animations/statsSymbol.png">
		<div  class="strecket col-xs-8 col-sm-9">Career Stats</div>
	</div>
	<div style="margin-top: 20px; margin-bottom: 10px;" class="col-xs-11 col-xs-offset-1 col-sm-4  col-sm-offset-7 ">
		<img style="border:0px; padding:0px; height:40px; width:55px; margin-top:8px; float: left;"  class="undreBild"   src="animations/academicSymbol.png">
		<div  class="strecket col-xs-8 col-sm-9">Academics</div>
	</div>
	<div style="margin-top: 20px;"  class="col-xs-11 col-xs-offset-1 col-sm-4  col-sm-offset-7 ">	
		<img style="border:0px; padding:0px; height:40px; width:55px; margin-top:8px; float: left;" class="undreBild"   src="animations/mediaSymbol.png">
		<div  class="strecket col-xs-8 col-sm-9">Media</div>
	</div>
	<div style="margin-top: 20px;" class="col-xs-11 col-xs-offset-1 col-sm-4  col-sm-offset-7 ">	
		<img style="border:0px; padding:0px; height:40px; width:55px; margin-top:8px; float: left;" class="undreBild"     src="animations/accoladesTrophy.png">
		<div  class="strecket col-xs-8 col-sm-9">Accolades</div>
	</div>
	

</div>



</div>




<<<<<<< Updated upstream
<div class='profilruta col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0' >
	
	<div class='row'>
		<ul class='col-xs-12 col-md-12 col-md-offset-0 kuken' >
=======
<div class='profilruta col-xs-12 col-md-10 col-md-offset-1 col-xs-offset-0' >
	
	
	<div id="innerTest">
>>>>>>> Stashed changes
	
<?php
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');
$id = $_SESSION['id'];
$query = mysql_query("SELECT * FROM anvand WHERE id='$id'");


while ($row = mysql_fetch_assoc($query)) {

if ($rader = mysql_num_rows($query)) {

//	diven
<<<<<<< Updated upstream
	echo "<div class='col-xs-12 col-md-5 profildata	' style=' border:1px solid black;'><h3 id='kkk'>player data</h3>";
=======
	echo "<div class='col-xs-12 col-md-5 profildata	'><h3 id='kkk'>player data</h3><div class='playerDataInner'>";
>>>>>>> Stashed changes
	
//player data visa om det finns value i dem
	if ($row['first']) {
		echo "<h5>Name: ".$row['first']." ".$row['last']."<br>"
	;}
	if ($row['country']) {
		echo "<h5>Nationality: ".$row['country']."<br>"
	;}
	if ($row['years']) {
		echo "<h5>Born/age: ".$row['years']." (".$_age.")<br>"
	;}
	if ($row['age']) {
		echo "<h5>Age: ".$row['age']."<br>"
	;}

	if ($row['height']) {
		echo "<h5>Height: ".$row['height']."<br>"
	;}
		if ($row['weight']) {
		echo "<h5>Weight: ".$row['weight']."<br>"
	;}
		if ($row['foot']) {
		echo "<h5>Foot: ".$row['foot']."<br>"
	;}
		if ($row['club']) {
		echo "<h5>Club: ".$row['club']."<br>"
	;}
	if ($row['startYearClub']) {
		echo "<h5>In the team since: ".$row['startYearClub']."<br>"
	;}
	


<<<<<<< Updated upstream
	echo "</div>";
=======
	echo "</div></div>";
>>>>>>> Stashed changes
}





}

?>

<<<<<<< Updated upstream

				</div>
=======
<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
<div class="seasonContainer col-xs-12 col-md-5 ">
<h3 class="stats">season stats</h3>
	<select class="col-xs-10 col-xs-push-1 col-md-10 col-md-push-1">
		  <option value="2016">2016</option>
		  <option value="2015">2015</option>
		  <option value="2014">2014</option>
		 
</select>
<div  id="season" class="  col-xs-12  col-md-12 ">



		  </div>
</div>



</div>


</div>


<div class='profilruta col-xs-12 col-md-10 col-md-offset-1 col-xs-offset-0' >

<div>

<?php 
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');
$id = $_SESSION['id'];
$query = mysql_query("SELECT * FROM accolades WHERE user='$id'");


while ($row6 = mysql_fetch_assoc($query)) {



	if ($rader = mysql_num_rows($query)) {

			?>
		<div class="col-md-12 col-md-offset-0 accoladesContainer ">
			<h2 style="text-align: center;">accolades</h2>
			<div id="accoladesInner" >
			<?php


			

			if ($row6['acco1']) {
				?>
				<div class="accoladesDiv">
					<h3>
				<?php 
					echo $row6['acco1year']
				 ?>
					 </h3>
					<?php
					echo $row6['acco1']
					?>
					</div>
			 	<?php 
				;}

				if ($row6['acco2']) {
				?>
				<div class="accoladesDiv">
					<h3>
				<?php 
					echo $row6['acco2year']
				 ?>
					 </h3>
					<?php
					echo $row6['acco2']
					?>
					</div>
			 	<?php 
				;}
				if ($row6['acco3']) {
				?>
				<div class="accoladesDiv">
					<h3>
				<?php 
					echo $row6['acco3year']
				 ?>
					 </h3>
					<?php
					echo $row6['acco3']
					?>
					</div>
			 	<?php 
				;}


				
				?>

			

			</div>
		</div>
</div>

</div>

<div class='profilruta col-xs-12 col-md-10 col-md-offset-1 col-xs-offset-0' >


<?php 
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');
$id = $_SESSION['id'];
$query = mysql_query("SELECT * FROM abour WHERE user='$id'");


while ($row4 = mysql_fetch_assoc($query)) {



if ($rader = mysql_num_rows($query)) {

	?>
<div style="border: 1px solid black; background:#5aabb1;" class="col-md-5">
	<h2>Who am I?</h2>
	<?php


if ($row4['about']) {
		echo $row4['about']
	;}



?>

</div>

<?php
}

}
?>



<?php 
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');
$id = $_SESSION['id'];
$query = mysql_query("SELECT * FROM reko WHERE user='$id'");


while ($row5 = mysql_fetch_assoc($query)) {



	if ($rader = mysql_num_rows($query)) {

			?>
		<div style="border: 1px solid black; background:#5aabb1;" class="col-md-5 col-md-push-1">
			<h2>Scout report</h2>
			<?php


			if ($row5['rekomendation']) {
				echo $row5['rekomendation']
			;}

			if ($row5['namn']) {
				?>
				<h3>
				<?php
				echo $row5['namn']
				?>
				</h3>
			 	<?php 
				;}

				if ($row5['club']) {
				?>
				<h3>
				<?php
				echo $row5['club']
				?>
				</h3>
			 	<?php 
				;}
				?>

				

		</div>

		<?php
	}

}
?>

		<?php
	}

}
?>

	</div>		
>>>>>>> Stashed changes



	

</body>
</html>