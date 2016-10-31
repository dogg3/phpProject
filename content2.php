<!DOCTYPE html>
  <html lang="en">
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

  function slide(x) {
      var image = document.getElementById('img');
    imagecount = imagecount + x;
    if(imagecount > total){ imagecount = 1;}
    if(imagecount < 1){ imagecount = total;}
  
    image.src = "img"+ imagecount + ".jpeg";
}
</script>

<body>


<div id="content2" class="content col-xs-12">
    <div class=" horahora col-xs-9 col-md-5 col-xs-offset-1">
        <h2>find the player you're looking for</h2>
        <div class"col-md-2 col-xs-offset-1"><p>CSP Academy Camp är ett elit-läger som riktar sig til
        l fotbollspelare som tar sin idrott på största allvar. Vi söker nuvarande college-athletets som v
        ill förbereda sig för säsongen på bästa tänkbara sätt. Elit-spelare från andra ligor är också välko
        mna för att ta del av den hårda och förberande träningen som Academy campsen erbjuder. Sänd er info så
         hör vi vidare för betalning och mer info</p></div>

         <!---<div class="college">
         <div id="leftholder" clas="left"><img onClick="slide(-1)" src="arrowleft.png"></div>
      
      <div id="rightholder" class="right"><img 
        onClick="slide(1)" src="arrowright.png"></div>
        </div>
        -->
        
    </div>

</body>
</html>