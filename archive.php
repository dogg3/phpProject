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


<div id="archive" class="container col-xs-12">

<a href=""></a>

<div class="col-xs-12 col-md-8 col-md-offset-2">
 <?php while ($row = mysql_fetch_assoc($query)) {

echo "
<div style='padding:10px; ' class=' col-xs-offset-0 col-xs-4 col-md-3 col-md-offset-0'>
    <div style='padding: 0px;' class='bilderna col-xs-12'>
      <img style='width:100%; height:80%;' src='profilePhotos/".$row['file']."'>
      <div style='text-align: center;'><a href='profile.php'> ".$row['first']." ".$row['last']."</div>
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