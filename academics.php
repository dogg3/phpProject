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
          <form class="regga col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3" enctype="multipart/form-data" action="academics.inc.php" method="POST">
            <fieldset><h2>create your academic profile</h2></fieldset>
           
            <h5>academic year</h5>
          <select class="col-xs-12 col-md-10 col-md-offset-1" name="academicYear" >
              <option></option>
              <option>Freshman High School</option>
              <option>Sophmore High School</option>
              <option>Junior High School</option>
              <option>Senior High School</option>
              <option>Freshman College</option>
              <option>Sophmore College</option>
              <option>Junior College</option>
              <option>Senior College</option>
            </select>

            <h5>high school </h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" name="highSchool" >


           <h5>gpa - high school </h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" name="gpaHS" >

            <h5> college *</h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" name="college" >


            

            <h5>gpa - college * </h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" name="gpaCollege" >

            <h5>sat - math score </h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" name="satMath" >


            <h5>sat - reading score </h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" name="satReading" >


            <h5>sat - writing score </h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" name="satWriting" >

             <h5>toefl -  score **</h5>
            <input class="col-xs-12 col-md-10 col-md-offset-1" name="toefl" >

        <h5 style="margin-top: ">* if applicable</h5>
        <h5>** only for none us citizens</h5>
            <button class="button col-xs-6 col-xs-offset-3" type="submit">create</button>
            
          </form>

          </div>
        
 
 
<?php include 'footer.php' ?>



</body>
</html>