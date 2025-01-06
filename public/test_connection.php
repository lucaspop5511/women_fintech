<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once "../config/database.php";

$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    echo "Conexiunea la baza de date a reușit!";
} else {
    echo "Conexiunea a eșuat.";
}
?>
