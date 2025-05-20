<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Înregistrare - CS2</title>
    <link rel="stylesheet" href="css/stile.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascript/register.js" defer></script>
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Pagina Principală</a></li>
        <li><a href="echipe.php">Echipe</a></li>
        <li><a href="update.php">Update-uri</a></li>
        <li><a href="turnee.php">Turnee</a></li>
        <li><a href="login_page.php">Logare</a></li>
        <li><a href="register_page.php">Înregistrare</a></li>
    </ul>
</nav>

<h1>Înregistrare</h1>
<form id="register-form">
    <label for="username">Nume utilizator:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Parolă:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Înregistrează-te</button>
</form>
<div id="message"></div>
<p>Deja ai cont? <a href="login_page.php">Loghează-te aici</a>.</p>
</body>
</html>