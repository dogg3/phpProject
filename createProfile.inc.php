<?php 
session_start();
include 'dbh.php';

$first = $_SESSION['first'];
$last = $_SESSION['last'];
$uid = $_SESSION['uid'];
$pwd = $_SESSION['pwd'];
$years = $_SESSION['years'];
$country = $_SESSION['country'];



$position = $_POST['position'];
$foot = $_POST['foot'];
$club = $_POST['club'];
$startYearClub = $_POST['startYearClub'];
$gamesPlayed = $_POST['gamesPlayed'];
$goals = $_POST['goals'];
$assists = $_POST['assists'];
$rewards = $_POST['rewards'];
$video = $_POST['video'];



$sql = "INSERT INTO anvand (first, last, uid, pwd, position, foot, club,startYearClub, gamesPlayed, goals, assists, rewards, video, years, country)
VALUES ('$first','$last', '$uid', '$pwd', '$position', '$foot', '$club', '$startYearClub', '$gamesPlayed', '$goals', '$assists','$rewards','$video','$years', '$country')";

$result = mysqli_query($conn, $sql);

header("location: academics.php");



?>