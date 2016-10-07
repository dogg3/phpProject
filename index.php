
<!DOCTYPE html lang="en">
  <head>
  <?php  
session_start();
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PL DATABASE</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="loginsql.css" rel="stylesheet">


<body>

	<!-- header -->
		<!-- du är inloggad-php -->
		<?php include 'header.php'; ?>
	<!-- header end-->

	<!-- landing page-->
		<!--registrering-->
		<?php include 'container.php'; ?>
		<!--registrering end-->
	<!-- landing page sidan end -->
<?php include 'content1.php' ?>
<?php include 'content2.php' ?>
<?php include 'content3.php' ?>




<?php include 'footer.php' ?>
</body>
</html>