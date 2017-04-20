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

</head>
<body>


<?php include 'header.php'; ?>

<div class="container col-xs-12">
  <?php 
//error handling registrer
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url, 'error=empty')) {
  echo "<div class=' error col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4'>fill out all fields</div>";
} 
if(strpos($url, 'error=uid')) {
  echo "<div class=' error col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4'; '>the username is taken</div>";
} 
?>


 <form class="regga col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4" action="signup.php" method="POST" style="margin-top: 70px;">
          <fieldset><h2>player register</h2></fieldset>
           
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="text" name="first" placeholder='first name'>
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="text" name='last' placeholder='last name'>
             <h5>country</h5>
            <select class="col-xs-12 col-md-10 col-md-offset-1" type="text" name="country" >
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
            </select>
            <h5>birth date</h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="date" name='years' placeholder='age'>
          


          
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="text" name='uid' placeholder='username'>
            <input class="col-xs-12 col-md-10 col-md-offset-1" type="password" name='pwd' placeholder='password'>
            <button class="button col-xs-6 col-xs-offset-3" type="submit">sign up</button>
        </form>


 
</div>


 
<?php include 'footer.php' ?>



</body>
</html>