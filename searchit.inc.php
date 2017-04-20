
<?php  
session_start();
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');


//collect

$output = "";
if (isset($_POST['searchVal'])) {
	$searchq = $_POST['searchVal'];  
$searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
$query = mysql_query("SELECT * FROM anvand WHERE first LIKE '%$searchq%' or last LIKE '%$searchq%' ");
$count = mysql_num_rows($query);
if ($count == 0) {
	$output = '<div  style=" margin-left:-35px; color:black; text-align:center; font-size:18px; font-variant:small-caps;">no players found</div>';
}

else {
	while ($row = mysql_fetch_array($query)) {
		$fname = $row['first'];
		$lname = $row['last'];
		$img = $row['file'];
		$position = $row['position'];
		$id = $row['id'];
$output .= '<div><img class="searchBild" src="profilePhotos/'.$img.'"><a href="">'.$fname.' '.$lname.'</a><br><div style="color:black;" class="searchPos">'.$position.'</div></div><br>';

	}
}

if(empty($query)) {
$output .= '';

}
echo $output;


}

?>
