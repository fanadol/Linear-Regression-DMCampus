<?php

$db = mysqli_connect("localhost","root","","datamining");

if(!$db){
	echo "Connection Failed: ".mysqli_connect_error();
}

?>