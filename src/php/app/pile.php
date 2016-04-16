<?php

$note = $_POST['note'];
$mysqli = new mysqli("localhost:3306", "app", "444830ccc5b3964c57f5b50b8c35a7eb", "notepile");
$mysqli->query("INSERT INTO note (content) VALUES ('$note')");
$mysqli->close();

?>