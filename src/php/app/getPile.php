<?php

$offsetFromTop = $_POST['offsetFromTop'];
$amount = $_POST['amount'];
$mysqli = new mysqli("localhost:3306", "app", "444830ccc5b3964c57f5b50b8c35a7eb", "notepile");
$mysqli->query("SELECT id, content FROM note ORDER BY id desc LIMIT $amount OFFSET $offsetFromTop");
$mysqli->close();

?>
