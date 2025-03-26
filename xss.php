<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faille XSS</title>
</head>
<body>
<div class="container">
    <h2>Test Faille XSS</h2>
    <form method="POST" action="xss.php">
        <label for="email">Email</label>
        <input id="email" name="email" type="text">
        <button type="submit">Valider</button>
    </form>
    <a href="logout.php">Déconnexion</a>
</div>
</body>
</html>

<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo "Votre email est " . $email;
}