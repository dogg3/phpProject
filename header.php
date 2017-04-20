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

<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
     <script type="text/javascript">
  function searchq() {
  var searchTxt = $("input[name='search']").val();
if ($.trim(searchTxt) != '') {
  $.post("searchit.inc.php", {searchVal: searchTxt}, function(output){
var rutan = document.getElementById("output");
	rutan.style.visibility = "visible";
$("#output").html(output);
  });
}
}

function stefan() {
	var rutan = document.getElementById("output");
	rutan.style.visibility = "hidden";
}

</script>






		</head>


<body onload="inlogg()" onclick="stefan()">

<div class="col-xs-12 header">
		<!-- meny-php -->
		
		<div class="col-xs-2 col-md-1" >
			<a href="index.php"><img style="height:40px; width:40px; margin-top: 5px; " src="playerlotLogoLiten.png"></a>

		</div>
		<div class="col-md-4 pull-right" style="padding-right: 20px; margin-top: 5px;" class="visainlogg col-xs-2 col-xs-offset-8 col-md-offset-8 ">
		<div  id="menyBild"  onclick="menySlider()"><img src="menu.png" style="float:right; height:40px; width:40px;"></style></div>
		</div>

<form style="border:0px;margin-left:10px;margin-bottom: 0px; padding:0px; margin-top: 10px; " class=" col-xs-7 col-md-4"   action='searchit.inc.php' method='POST'>
						     

						<input style=" margin-top:2px;padding:3px; background-color:#6c8284;" class="searchBar col-xs-12"  onkeydown="searchq()" type='text' name='search' placeholder='Search Players'>
						
						
</form>
<br>
<div style="    box-shadow: 1px 2px 5px black; margin-left:10px;background: white; padding-left:40px;  margin-top: 0px; border-left: 1px solid black; border-right:1px solid black; border-bottom:1px solid black; border-top:0px;"
 id="output" class="  col-xs-7 col-md-4 ">
     
</div>


		</div>

<div class=" menySlider" id="meny">
		


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

		

	