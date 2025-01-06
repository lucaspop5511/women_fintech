<?php
include_once "../../config/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];
    $company = $_POST['company'];
    $expertise = $_POST['expertise'];
    $linkedin_profile = $_POST['linkedin_profile'];
    $status = $_POST['status'];

    $database = new Database();
    $conn = $database->getConnection();

    $query = "INSERT INTO members (first_name, last_name, email, profession, company, expertise, linkedin_profile, status)
              VALUES (:first_name, :last_name, :email, :profession, :company, :expertise, :linkedin_profile, :status)";
    
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':profession', $profession);
    $stmt->bindParam(':company', $company);
    $stmt->bindParam(':expertise', $expertise);
    $stmt->bindParam(':linkedin_profile', $linkedin_profile);
    $stmt->bindParam(':status', $status);

    if ($stmt->execute()) {
        echo "Membrul a fost adăugat cu succes!";
    } else {
        echo "Eroare la adăugarea membrului.";
    }
}
?>
