<?php  
session_start();
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');


$query = mysql_query("SELECT * FROM anvand");
$row = mysql_fetch_assoc($query);
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

    <?php include 'header.php'; ?>





        <div class=" sida col-xs-12">
          <form class="regga col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3" enctype="multipart/form-data" action="createProfile.inc.php" method="POST">
            <fieldset><h2>create your player profile</h2></fieldset>
           
            <h5>position</h5>
            <select class="col-xs-12 col-md-10 col-md-offset-1" type="text" name="position" >
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
            <h5>foot</h5>
            
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="text" name="foot" placeholder="foot">
              <h5>club</h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="text" name="club" placeholder="club">
            <h5>year you joined current club</h5>
            <select class="col-xs-12 col-md-10 col-md-offset-1" name="startYearClub" >
                <option></option>
              <option>2016</option>
              <option>2015</option>
              <option>2013</option>
              <option>2012</option>
              <option>2011</option>
              <option>2010</option>
            </select>
            <h5>games played</h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="text" name="gamesPlayed" placeholder="games played">
             <h5>goals</h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="text" name="goals" placeholder="goals">
             <h5>assists</h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="text" name="assists" placeholder="assists">
          <h5>highlight video url</h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="text" name="video" placeholder="video url">
            <!-- <h5>full game</h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="text" name="video" placeholder="video url"> 
            -->
            
            <button class="button col-xs-6 col-xs-offset-3" type="submit">create</button>
            
          </form>

          </div>
        
 
 
<?php include 'footer.php' ?>



</body>
</html>