<?php  
session_start();
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');


$query = mysql_query("SELECT * FROM anvand");

?>

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

     </head>


<body>
<?php include 'header.php' ?>


<div id="archive" class=" col-xs-12">





<form method="post" action="search.php" class="col-xs-12 col-md-8 col-md-offset-2">
  <p style="font-variant: small-caps">last name</p> <input type="text" name="last" >
  <p style="font-variant: small-caps">position</p>     <select   type="text" name="position" >
              <option></option>
              <option>goalkeeper</option>
              <option>left defender</option>
              <option>central defender</option>
              <option>right defender</option>
              <option>left midfield</option>
              <option>center midfield</option>
              <option>right midfield</option>
              <option>left forward</option>
              <option>central forward</option>
              <option>right forward</option>
            </select> 
  <!--position<input type="text" name="position" >-->
  <input type="submit" value="search" name="submit">
</form>


<div class="col-xs-12 col-md-8 col-md-offset-2">
 <?php while ($row = mysql_fetch_assoc($query)) {

echo "
<div style='padding:10px; ' class=' col-xs-offset-0 col-xs-4 col-md-3 col-md-offset-0'>
    <div style='padding: 0px;' class='bilderna col-xs-12'>
      <img style='width:100%; height:80%;' src='profilePhotos/".$row['file']."'>
      <div id='bildText'><a href='user.php?id=".$row['id']."'> ".$row['first']." ".$row['last']."</div>
    </div>
  </div>
  ";
} 

?>  
  
</div>







</div>
			</div>

<?php include 'footer.php' ?>

</body>
</html>