<?php 


session_start();
include 'dbh.php';



$academicYear = $_POST['academicYear'];
$highSchool = $_POST['highSchool'];
$gpaHS = $_POST['gpaHS'];	
$college = $_POST['college'];

$gpaCollege = $_POST['gpaCollege'];
$satMath = $_POST['satMath'];
$satReading = $_POST['satReading'];
$satWriting = $_POST['satWriting'];
$toefl = $_POST['toefl'];


$sql = "
UPDATE anvand 
SET academicYear ='$academicYear',
highSchool='$highSchool',
gpaHS='$gpaHS',
college='$college',
gpaCollege='$gpaCollege',
satMath='$satMath',
satReading='$satReading',
satWriting='$satWriting',
toefl='$toefl'


WHERE id='$id'
";





$result = mysqli_query($conn, $sql);

header("location: profile.php");



?>