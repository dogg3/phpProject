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
<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
     <script type="text/javascript">
  function searchq() {
  var searchTxt = $("input[name='search']").val();
if ($.trim(searchTxt) != '') {
  $.post("searchit.inc.php", {searchVal: searchTxt}, function(output){

$("#output").html(output);
  });
}
}



</script>
<body>

<?php include 'header.php'; ?>

<div class="col-xs-12" style="background:#e9ebee; padding-bottom:0px; padding-left:0px; padding-right: 0px;">



<div class='profilruta col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0' >

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

<div class='profilruta col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0' >
	
<form style="margin-bottom: 0px; padding:0px; " class=" col-xs-7"   action='searchit.inc.php' method='POST'>
						     

						<input style="padding-left:0px; margin:0px;" class="col-xs-12"  onkeydown="searchq()" type='text' name='search' placeholder='search players'>
						
						
</form>
<div style=" padding-left:40px;  margin-top: 0px; border-left: 1px solid black; border-right:1px solid black; border-bottom:1px solid black; border-top:0px;"
 id="output" class="  col-xs-7 ">
     
</div>


</div>

<div class='profilruta col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0' >
	
	<div class='row'>
<input type="text" id="name">
	<input type="submit" id="name-submit" value="grab">
	<div id="name-data"></div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="global.js" type="text/javascript"></script>
	</div>
</div>








				</div>



	

</body>
</html>