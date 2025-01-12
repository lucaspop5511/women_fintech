<?php
include_once "../../config/database.php";

if (isset($_GET['id'])) {
    $database = new Database();
    $db = $database->getConnection();

    $query = "DELETE FROM members WHERE id = ?";
    $stmt = $db->prepare($query);

    if ($stmt->execute([$_GET['id']])) {
        header("Location: list_members.php?message=deleted");
    } else {
        echo "Error deleting member.";
    }
} else {
    header("Location: list_members.php?error=missing_id");
}
?>
