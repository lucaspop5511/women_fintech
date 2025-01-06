<?php
include_once "../../config/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $member_id = $_POST['member_id'];
    $event_id = $_POST['event_id'];

    $database = new Database();
    $conn = $database->getConnection();

    $query = "INSERT INTO event_registrations (member_id, event_id)
              VALUES (:member_id, :event_id)";
    
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':member_id', $member_id);
    $stmt->bindParam(':event_id', $event_id);

    if ($stmt->execute()) {
        echo "Te-ai înregistrat cu succes!";
    } else {
        echo "Eroare la înregistrare.";
    }
}
?>
