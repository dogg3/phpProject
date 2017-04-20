
<?php  
session_start();
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
</head>
<body>


<div class="row">


<form style="margin-bottom: 0px; padding-bottom:0px; border:1px solid black;" class=" col-xs-7"   action='searchit.inc.php' method='POST'>
						     

						<input style="padding-left:0px; margin:0px;" class="col-xs-12"  onkeydown="searchq()" type='text' name='search' placeholder='search for players'>
					
						
</form>



 
<div style=" padding-left:40px;  margin-top: 0px;"
 id="output" class="  col-xs-7 ">
     
</div>


</div>
 




</body>
</html>