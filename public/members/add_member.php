<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă Membru</title>
</head>
<body>
    <h1>Adaugă un nou membru</h1>
    <form action="save_member.php" method="POST">
        <label for="first_name">Prenume:</label>
        <input type="text" name="first_name" id="first_name" required><br><br>
        <label for="last_name">Nume:</label>
        <input type="text" name="last_name" id="last_name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="profession">Profesie:</label>
        <input type="text" name="profession" id="profession"><br><br>
        <label for="company">Companie:</label>
        <input type="text" name="company" id="company"><br><br>
        <label for="expertise">Expertiză:</label>
        <textarea name="expertise" id="expertise"></textarea><br><br>
        <label for="linkedin_profile">Profil LinkedIn:</label>
        <input type="url" name="linkedin_profile" id="linkedin_profile"><br><br>
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="active">Activ</option>
            <option value="pending">În așteptare</option>
            <option value="mentor">Mentor</option>
        </select><br><br>
        <button type="submit">Salvează</button>
    </form>
</body>
</html>
