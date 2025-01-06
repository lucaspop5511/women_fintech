<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă Eveniment</title>
</head>
<body>
    <h1>Adaugă un nou eveniment</h1>
    <form action="save_event.php" method="POST">
        <label for="title">Titlu:</label>
        <input type="text" name="title" id="title" required><br><br>
        <label for="description">Descriere:</label>
        <textarea name="description" id="description" required></textarea><br><br>
        <label for="event_date">Data Evenimentului:</label>
        <input type="date" name="event_date" id="event_date" required><br><br>
        <label for="location">Locație:</label>
        <input type="text" name="location" id="location" required><br><br>
        <button type="submit">Salvează Evenimentul</button>
    </form>

</body>
</html>
