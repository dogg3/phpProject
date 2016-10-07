<?php 

session_start();

$_SESSION['username'] = "douglas";



if (isset ($_SESSION['username'])) {
	echo "you are logged in";
	
}

else {
	echo "you are not logged in";


}

 ?>
