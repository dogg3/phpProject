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
    image.style.backgroundImage = 'url("studentbild' + imagecount + '.jpg")';
    

//knappen
var knappen = document.getElementsByClassName("button1");
    if (imagecount == 3) {
knappen[2].style.backgroundColor = "black";
knappen[2].style.color = "black";
knappen[1].style.backgroundColor = "white";
knappen[1].style.color = "white";
knappen[0].style.backgroundColor = "white";
knappen[0].style.color = "white";

}

else if (imagecount == 2) {
knappen[1].style.backgroundColor = "black";
knappen[1].style.color = "black";
knappen[2].style.backgroundColor = "white";
knappen[2].style.color = "white";
knappen[0].style.backgroundColor = "white";
knappen[0].style.color = "white";

}

else if (imagecount == 1) {
knappen[0].style.backgroundColor = "black";
knappen[0].style.color = "black";
knappen[1].style.backgroundColor = "white";
knappen[1].style.color = "white";
knappen[2].style.backgroundColor = "white";
knappen[2].style.color = "white";

}
},3000);







  
//byte av bilden när man trycker på knappen
function bild(x) {

  var bild1 = document.getElementById("containerBild");

  bild1.style.backgroundImage = 'url("studentbild'+ x +'.jpg")';

    var knappen = document.getElementsByClassName("button");


if (x == 3) {
knappen[2].style.backgroundColor = "black";
knappen[2].style.color = "black";
knappen[1].style.backgroundColor = "white";
knappen[1].style.color = "white";
knappen[0].style.backgroundColor = "white";
knappen[0].style.color = "white";

}

else if (x == 2) {
knappen[1].style.backgroundColor = "black";
knappen[1].style.color = "black";
knappen[2].style.backgroundColor = "white";
knappen[2].style.color = "white";
knappen[0].style.backgroundColor = "white";
knappen[0].style.color = "white";

}

else if (x == 1) {
knappen[0].style.backgroundColor = "black";
knappen[0].style.color = "black";
knappen[1].style.backgroundColor = "white";
knappen[1].style.color = "white";
knappen[2].style.backgroundColor = "white";
knappen[2].style.color = "white";

}




}

     </script>
    </head>


<body>


<div class="container col-xs-12">



		<?php  

	
					echo "<div id='containerBild' class='containerBild col-xs-12 col-xs-offset-0 col-md-offset-0'>
          
          <div id='knappar'>

  <button onclick='bild(1)' value='tjo' class='button1' id='button1'></button>
  
    <button  onclick='bild(2)' class='button1' id='button2'></button>
    <button onclick='bild(3)''  class='button1' id='button3'></button>
</div>

          </div>";;
	
			?>
			</div>



</body>
</html>