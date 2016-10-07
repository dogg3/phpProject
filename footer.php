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


<body>


<footer class="footer col-xs-12">
<ul> 
    <li><a href="index.php">home</a></li>
      <li><a href="registrera.php">player-archive</a></li>
    
    <?php if (!isset($_SESSION['id']))

    { echo "<li><a href='registrera.php'>register</a></li>
    
        
    ";} 

    else {
      echo "<li><a href='profile.php'>profile</a></li>";
    }


    ?>  


      
      <li class="copyright">© 2016 copyright - pl academy</li>    
      </ul>


</footer>

</body>
</html>