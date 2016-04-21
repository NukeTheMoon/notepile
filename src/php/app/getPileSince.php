<?php

$latestId = $_POST['latestId'];
$mysqli = new mysqli("localhost:3306", "app", "444830ccc5b3964c57f5b50b8c35a7eb", "notepile");
$result = $mysqli->query("SELECT id, content FROM note WHERE id > $latestId");
$notes = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($notes, $row);
    }
}
$mysqli->close();
echo json_encode($notes);
?>
