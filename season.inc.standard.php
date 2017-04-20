 <?php 



session_start();
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');
$id = $_SESSION['id'];




?>




<?php 



	$query2 = mysql_query("SELECT * FROM season2016 WHERE user='$id'");
$season2016 = mysql_fetch_assoc($query2);


?>
<div class="seasonRuta col-md-12">
	
		<h5 class="col-md-12"><span style="">Club: </span>
		<?php if ($season2016['club']) {
				echo $season2016['club'];
			;}?>
			</h5>

				<h5 class="col-md-12"><span style="">Country: </span>
		<?php if ($season2016['country']) {
				echo $season2016['country'];
			;}?>
			</h5>


		<h5 class="col-md-12"><span style="">Leauge: </span>
		<?php if ($season2016['leauge']) {
				echo $season2016['leauge'];
			;}?>
			</h5>



		<h5 class="col-md-12"><span style="">GP: </span>
		<?php if ($season2016['gamesPlayed']) {
				echo $season2016['gamesPlayed'];
			;}?>
			</h5>


		<h5 class="col-md-12"><span style="">Started: </span>
		<?php if ($season2016['gamesStarted']) {
				echo $season2016['gamesStarted'];
			;}?>
			</h5>


		<h5 class="col-md-12"><span style="">Goals: </span>
		<?php if ($season2016['goals']) {
				echo $season2016['goals'];
			;}?>
			</h5>

			<h5 class="col-md-12"><span style="">Assists: </span>
		<?php if ($season2016['assists']) {
				echo $season2016['goals'];
			;}?>
			</h5>



