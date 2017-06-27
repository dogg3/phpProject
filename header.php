	<?php 

mysql_connect("localhost", "root", "2010#Abc");
mysql_select_db('playerlot');
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
<!DOCTYPE html >
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
<<<<<<< Updated upstream

function stefan() {
	var rutan = document.getElementById("output");
	rutan.style.visibility = "hidden";
}

=======

function stefan() {
	var rutan = document.getElementById("output");
	rutan.style.visibility = "hidden";
}

>>>>>>> Stashed changes
</script>






		</head>


<body onload="inlogg()" onclick="stefan()">

<div class="col-xs-12 header">
		<!-- meny-php -->
<<<<<<< Updated upstream
		
=======

>>>>>>> Stashed changes
		<div class="col-xs-2 col-md-1" >
			<a href="index.php"><img style="height:40px; width:40px; margin-top: 5px; " src="playerlotLogoLiten.png"></a>

		</div>
		<div class="col-md-4 pull-right" style="padding-right: 20px; margin-top: 5px;" class="visainlogg col-xs-2 col-xs-offset-8 col-md-offset-8 ">
		<div  id="menyBild"  onclick="menySlider()"><img src="menu.png" style="float:right; height:40px; width:40px;"></style></div>
<<<<<<< Updated upstream
=======
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--HÄÄÄÄÄR BÖRJAR MODAL -->
<?php if (!isset($_SESSION['id'])) { ?>
<button style="margin-left: 10px; font-variant: small-caps; letter-spacing: 1px; font-weight: 400;"  type="button" class="col-md-2 col-md-push-4  logitin btn btn-primary" data-keyboard="false" data-backdrop="true" data-toggle="modal" data-target="#mymodal">
	log in
</button>

<div class="modal fade "  tabindex="-1"    id="mymodal" >
	<div class="modal-dialog" style="top:25vh;" >
		<div class="modal-content"  >
			<div class="modal-header" style="margin:0px; padding-bottom: 0px;">
			<h3 id="detta" style="    font-family: futura;
    font-variant: small-caps;
    font-size: 3em;
    margin-bottom: 20px;
    padding-bottom: 20px; color:black; margin:0px; text-align: center;">sign in and take control</h3>
			<button style="position: fixed; top: 10px; right:20px;" class="button close" type="close" data-dismiss="modal">&times;</button>
				
			</div>
			<div class="modal-body " style="padding:0px; margin-top: 25px;" >
				<form  action='login.php' method='POST' >
					<input   style=" margin-left: 149px;width:300px;" type='text' name='uid' placeholder='username'>
					<input style=" margin-left: 149px;width:300px;"   type="password" name='pwd' placeholder="password">
				<br><button style="border-radius: 10px;
    font-family: futura;
    font-size: 1.3em; padding:10px; padding-left: 20px; padding-right: 20px;margin-bottom: 10px;width:150px; margin-left: 224px;"  class='logitout '  type='submit'>log in </button>
					</form>

			</div>
			<div class="modal-footer">

				
			</div>
>>>>>>> Stashed changes
		</div>
	</div>
</div>




<form style="border:0px;margin-left:10px;margin-bottom: 0px; padding:0px; margin-top: 10px; " class=" col-xs-7 col-md-4"   action='searchit.inc.php' method='POST'>
						     

<<<<<<< Updated upstream
						<input style=" margin-top:2px;padding:3px; background-color:#6c8284;" class="searchBar col-xs-12"  onkeydown="searchq()" type='text' name='search' placeholder='Search Players'>
						
						
</form>
<br>
<div style="    box-shadow: 1px 2px 5px black; margin-left:10px;background: white; padding-left:40px;  margin-top: 0px; border-left: 1px solid black; border-right:1px solid black; border-bottom:1px solid black; border-top:0px;"
 id="output" class="  col-xs-7 col-md-4 ">
     
</div>
=======
<script type="text/javascript">
$('.modal').on('shown.bs.modal', function() {
  //Make sure the modal and backdrop are siblings (changes the DOM)
  $(this).before($('.modal-backdrop'));
  //Make sure the z-index is higher than the backdrop
  $(this).css("z-index", parseInt($('.modal-backdrop').css('z-index')) + 1);
>>>>>>> Stashed changes

});

</script>
<button type="button" style="margin-left: 10px; font-variant: small-caps; letter-spacing: 1px; font-weight: 400;" class="col-md-3 col-md-push-4  logitin btn btn-primary" data-keyboard="false" data-backdrop="false" data-toggle="modal" data-target="#mymodal2">
	register
</button>

<div class="modal fade "  tabindex="-1"    id="mymodal2" >
	<div class="modal-dialog" >
		<div class="modal-content" >
			<div style="color: black; font-family: futura; padding:0px;" class="modal-header">
			  <fieldset><h2 style="style= margin-bottom:0px; padding:0px;  font-family: futura;
    font-variant: small-caps;
    font-size: 3em;
   
    color:black; margin:0px; margin-top:13px; text-align: center;">player register</h2></fieldset></br>
			<button style="border: 0px; position: fixed; right: 20px; top: 15px;" class="button" type="close" data-dismiss="modal">&times;</button>
				
			</div>
			<div class="modal-body" style="color:black;">
				<form style="margin-top: 0px;"  action="signup.php" method="POST" style="margin-top: 70px;">
        
           
            <input style="width:60%; margin-left: 20%;" type="text" name="first" placeholder='first name'></br>
            <input style="width:60%; margin-left: 20%;" type="text" name='last' placeholder='last name'></br>
             <h5 style="width:60%; margin-left: 20%;">country</h5>
			<select style="width:60%; margin-left: 20%;"  type="text" name="country" >
              <option></option>
              <option>USA</option>
              <option>Canada</option>
              <option>Sweden</option>
              <option>Denmark</option>
              <option>Norway</option>
              <option>Iceland</option>
              <option>Finland</option>
              <option>England</option>
              <option>Germany</option>
              <option>Italy</option>
            </select></br>
            <h5 style="width:60%; margin-left: 20%;" >birth date</h5>
            <input  style="width:60%; margin-left: 20%;" type="date" name='years' placeholder='age'></br>
          


          
            <input style="width:60%; margin-left: 20%;" class="" type="text" name='uid' placeholder='username'></br>
            <input style="width:60%; margin-left: 20%;"  type="password" name='pwd' placeholder='password'></br>
            <button style="width:20%; margin-left: 40%;  font-family: futura;
    font-size: 1.3em; padding:10px; padding-left: 20px; padding-right: 20px;margin-bottom: 10px;width:150px; margin-left: 224px; background-color: #234042; color:white; border:0px;"  type="submit">sign up</button>
        </form>


			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>

<?php }; ?>


<!--HÄÄÄÄÄR slutar MODAL -->
		</div>

<form style="border:0px;margin-left:10px;margin-bottom: 0px; padding:0px; margin-top: 10px; " class=" col-xs-7 col-md-4"   action='searchit.inc.php' method='POST'>
						     

						<input style=" margin-top:2px;padding:3px; background-color:#6c8284;" class="searchBar col-xs-12"  onkeydown="searchq()" type='text' name='search' placeholder='Search Players'>
						
						
</form>




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

		

	