<?php
#importo config.php
require_once __DIR__.'/config.php';

#instanzio mysqli prendendo i dati da config
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

# verifico che non ci siano degli errori di connessione
if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    exit();
}

# setto le variabili che andrò ad utilizzare
$data = [];

# query di ricerca con prepared statement
$sql = "SELECT name, surname FROM students WHERE name = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $selected_name);

$selected_name = $_GET['name'];
$stmt->execute();
$result = $stmt->get_result();

if($result && $result->num_rows > 0) {
    //output data di ogni row
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
        // var_dump($data);
    }
} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
    die();
}

# chiudo la connessione
$conn->close();