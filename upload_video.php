<?php 
  
session_start();
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');
$id = $_SESSION['id'];
$query = mysql_query("SELECT * FROM anvand WHERE id='$id'");
$row = mysql_fetch_assoc($query);



if(isset($_POST['upload'])) {
echo "imagename: ". $image_name = $_FILES['image']['name'];
echo "type: ".$image_type = $_FILES['image']['type']; 
echo "size: ".$image_size = $_FILES['image']['size']; 
echo "tmp_name: ".$image_tmp_name = $_FILES['image']['tmp_name'];
echo "error: ".$image_tmp_name = $_FILES['image']['error'];


$uploaddir="photos/";
$uploadfile = $uploaddir .basename($_FILES['image']['name']);

if (move_uploaded_file($_FILES['image']['tmp_name'], $image_name)) {
rename($image_name, "profilePhotos/".$image_name);
	echo "file is valid";
	
$sql="
UPDATE anvand
SET file='$image_name',
type='$image_type',
size='$image_size'


WHERE id='$id'";

 mysql_query($sql); 

 header("location: updateProfile.php" );
	
}


else {
echo "did not work";
}

}


if($image_name==''){
	echo "<script>alert ('please select an image')</script>";
	exit();
}


	//$uploaddir = "phpProject/";
	//$uploadfile = $uploaddir.basename($_FILES['image']['name']);








//if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {

//	echo "file is valid";
	
//}

//else {
	//echo "file is not uploaded";
//}





//else {
//move_uploaded_file($image_tmp_name, "phpProject/$image_name");



//	echo "image uploaded";
//}

//


 ?>