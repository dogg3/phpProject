<?php

mysql_connect("localhost", "root", "");
mysql_select_db('players');


$query = mysql_query("SELECT * FROM playerStats");
$row = mysql_fetch_assoc($query);




echo $row['foot']."<br>";
echo $row['foot']."<br>";
echo $row['club']."<br>";

?>

