  <!DOCTYPE html>
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

var imagecount = 1;
  var total = 3;

//timern slider
 window.setInterval(function slideA() {
    
      var image = document.getElementById('containerBild');

    imagecount = imagecount + 1;
    if(imagecount > total){ imagecount = 1;}
    if(imagecount < 1){ imagecount = total;}
    image.style.backgroundImage = 'url("stadium' + imagecount + '.jpg")';
    

},4000);












function textFlytt() {

var tjo = document.getElementById("firstText");
var knappar = document.getElementById("knappar");
tjo.style.color = "white";
tjo.style.paddingTop = "175px";
tjo.style.transition = "padding 2s";
tjo.style.visibility = "visible";
knappar.style.marginTop = "260px";

}
   var imagecount = 1;
  var total = 3;

 window.setInterval(function textFlytt2() {
    
      var image = document.getElementById('containerBild');
 
    imagecount = imagecount + 1;
    if(imagecount > total){ imagecount = 1;}
    if(imagecount < 1){ imagecount = total;}
    



var tjo = document.getElementById("firstText");
var knappar = document.getElementById("knappar");
var regBox = document.getElementById("firstRegBox");
    
    if (imagecount == 1) {

tjo.innerHTML = "create your profile now <br> get seen by coaches !";
regBox.innerHTML = "register";

}


    if (imagecount == 2) {




tjo.innerHTML = "search for players <br> in player archive";
regBox.innerHTML = "player archive";
tjo.style.paddingRight ="200px;"




}

    if (imagecount == 3) {


tjo.innerHTML = "complete guide to get recruited";
regBox.innerHTML = "guide";

}



},4000);



     

     </script>
    </head>


<body  >


<div class="container col-xs-12">



		 

	
					<div  id='containerBild' class='containerBild col-xs-12 col-xs-offset-0 col-md-offset-0'>
          
<div class="row">
          <h3 class='col-md-6 col-md-offset-3' id='firstText'   class='firstText'>create your profile now <br> get seen by coaches !</h3>
</div> 
  

  <div id="firstRegBox" class='col-xs-6 col-xs-offset-3 col-md-2 col-md-offset-5'><a href="registrera.php" style="color: white; ">register</a></div>       


         

          </div>
	
			
			</div>



</body>
</html>