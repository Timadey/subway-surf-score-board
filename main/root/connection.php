<?php 

$dbs = mysqli_connect ('localhost','root', '') or die ("Error connecting to server");
mysqli_select_db ($dbs, 'subway_surf') or die ("Error connecting to database");

?>