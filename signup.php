<?php 
session_start();
include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//error handling
//check if it's empty
if (empty($first)) {
	header("location: registrera.php?error=empty");
	exit();

}
if (empty($last)) {
	header("location: registrera.php?error=empty");
	exit();

}
if (empty($uid)) {
	header("location: registrera.php?error=empty");
	exit();

}

if (empty($pwd)) {
	header("location: registrera.php?error=empty");
	exit();

}

//error handling end
//check if it's empty end

else {
	$sql = "SELECT uid FROM anvand WHERE uid='$uid'";
	$result = mysqli_query($conn, $sql);
	//check if the result is true (0,1)
	$uidcheck = mysqli_num_rows($result);
		if ($uidcheck > 0) {
			header("location: registrera.php?error=uid");
		exit();
		}


		else {

		$_SESSION['first'] = $_POST['first'];
		$_SESSION['last'] = $_POST['last'];
		$_SESSION['uid'] = $_POST['uid'];
		$_SESSION['pwd'] = $_POST['pwd'];

		header("location: createProfile.php");

		}

}	


?>