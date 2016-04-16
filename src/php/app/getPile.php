<?php

$offsetFromTop = $_POST['offsetFromTop'];
$amount = $_POST['amount'];
$mysqli = new mysqli("localhost:3306", "root", "", "notepile");
$mysqli->query("SELECT id, content FROM note ORDER BY id desc LIMIT $amount OFFSET $offsetFromTop");
$mysqli->close();

?>
