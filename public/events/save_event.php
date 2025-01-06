<?php
include_once "../../config/database.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['event_date'];
    $location = $_POST['location'];

    // Conexiune la baza de date
    $database = new Database();
    $conn = $database->getConnection();

    $query = "INSERT INTO events (title, description, date, location)
              VALUES (:title, :description, :date, :location)";
    
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':location', $location);

    if ($stmt->execute()) {
        echo "Evenimentul a fost adăugat cu succes!";
    } else {
        echo "Eroare la adăugarea evenimentului.";
    }
}
?>
