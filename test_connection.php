<?php
include_once "config/database.php";

$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    echo "Conexiunea la baza de date a reușit!";
} else {
    echo "Conexiunea a eșuat.";
}
?>
