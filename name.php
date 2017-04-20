<?php 
session_start();

if (isset($_POST) === true && empty($_POST['name']) == false) {

	mysql_connect("localhost", "root", "");
mysql_select_db('logintest');
$id = $_SESSION['id'];
	$first = $_POST['name'];
$query = mysql_query("SELECT * FROM 'anvand' WHERE 'first' ='douglas'");


while ($array = mysql_fetch_assoc($query)) {

echo "hora";

}


}


  ?>