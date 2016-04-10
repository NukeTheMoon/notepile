<?php

$note = $_POST['note'];
$mysqli = new mysqli("localhost:3306", "root", "", "notepile");
$mysqli->query("INSERT INTO note (content) VALUES ('$note')");
$mysqli->close();

?>