<?php 
session_start();
include 'dbh1.php';

$playerName = $_SESSION['row'];
$position = $_POST['position'];
$foot = $_POST['foot'];
$club = $_POST['club'];
$startYearClub = $_POST['startYearClub'];
$gamesPlayed = $_POST['gamesPlayed'];
$goals = $_POST['goals'];
$assists = $_POST['assists'];
$rewards = $_POST['rewards'];
$video = $_POST['video'];


$sql = "INSERT INTO playerStats (playerName, position, foot, club,startYearClub, gamesPlayed, goals, assists, video, img)
VALUES ('$playerName','$position', '$foot', '$club', '$startYearClub', '$gamesPlayed', '$goals', '$assists', '$video')";

$result = mysqli_query($conn, $sql);

header("location: profile.php");



?>