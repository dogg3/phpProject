<?php 
session_start();
include 'dbh.php';
$id = $_SESSION['id'];
$position = $_POST['position'];
$foot = $_POST['foot'];
$club = $_POST['club'];
$startYearClub = $_POST['startYearClub'];
$gamesPlayed = $_POST['gamesPlayed'];
$goals = $_POST['goals'];
$assists = $_POST['assists'];
$rewards = $_POST['rewards'];
$video = $_POST['video'];


$sql = "
UPDATE anvand
SET position='$position',
foot='$foot',
club='$club',
startYearClub='$startYearClub',
gamesPlayed='$gamesPlayed',
goals='$goals',
assists='$assists',
video='$video'


WHERE id='$id'
";



$result = mysqli_query($conn, $sql);

header("location: profile.php");



?>