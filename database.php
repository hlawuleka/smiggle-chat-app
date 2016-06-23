<?php

$host = "localhost";
$user = "root";
$pass = "root";
$database = "smiggle";

$con = new mysqli($host, $user, $pass, $database);

function formatDate($date){
	return date('D g:i a', strtotime($date));
}

?>