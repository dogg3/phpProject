<?php 
session_start();
include 'dbh.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];



$sql = "SELECT * FROM anvand WHERE uid='$uid' and pwd='$pwd'";
$result = mysqli_query($conn, $sql);



if (!$row = mysqli_fetch_assoc($result)) {

header("location: index.php");
	
	
}

else {
$_SESSION['id'] = $row['id'];
$_SESSION['row'] = $row['first'];

echo $_SESSION['id'];
header("location: profile.php");
}









?>