<?php

$firstId = $_POST['firstId'];
$amount = $_POST['amount'];
$mysqli = new mysqli("localhost:3306", "app", "444830ccc5b3964c57f5b50b8c35a7eb", "notepile");
$getLatest = "SELECT id, content FROM note ORDER BY id desc LIMIT $amount";
$getFromSpecificId = "SELECT id, content FROM note WHERE id <= $firstId ORDER BY id desc LIMIT $amount";
if ($firstId == 0) {
    $result = $mysqli->query($getLatest);
} else {
    $result = $mysqli->query($getFromSpecificId);
}
$notes = array();
if ($result->num_rows <= 0) {
    $result = $mysqli->query($getLatest);
} else {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($notes, $row);
        }
    }
}
$mysqli->close();
echo json_encode($notes);
?>
