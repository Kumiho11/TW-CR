<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-uri Recente CS2</title>
    <link rel="stylesheet" href="css/stile3.css">

</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Pagina Principală</a></li>
        <li><a href="echipe.php">Echipe</a></li>
        <li><a href="update.php">Update-uri</a></li>
        <li><a href="turnee.php">Turnee</a></li>
        <?php if (isset($_SESSION['user'])): ?>
            <li><a href="auth/logout.php">Ieșire</a></li>
        <?php else: ?>
            <li><a href="login_page.php">Logare</a></li>
            <li><a href="register_page.php">Înregistrare</a></li>
        <?php endif; ?>
    </ul>
</nav>

<h1>Update-uri Recente în CS2</h1>

<h2>🔹 Update Grafic & Optimizări</h2>
<p>- Îmbunătățiri la iluminare și reflexii pentru o experiență vizuală mai realistă.</p>
<p>- Optimizări de performanță pentru PC-urile low-end.</p>

<h2>🔹 Schimbări în Gameplay</h2>
<p>- Ajustări la recoil-ul armelor pentru un echilibru mai bun.</p>
<p>- Modificări la hitbox-uri pentru o detecție mai precisă a gloanțelor.</p>

<h2>🔹 Hărți & Modificări</h2>
<p>- Remaster pentru harta **Inferno**, adăugând detalii și fixând bug-uri.</p>
<p>- Noi modificări la **Overpass** pentru un echilibru mai bun.</p>

<h2>🔹 Sistem Anti-Cheat</h2>
<p>- Îmbunătățiri în detectarea hack-urilor și a jucătorilor toxici.</p>
<p>- Implementare mai agresivă a sistemului de raportare.</p>

<h2>🔹 Update-uri la Skin-uri</h2>
<p>- Noi colecții de skin-uri și un nou case drop.</p>
<p>- Ajustări la prețul unor skin-uri pe piața Steam.</p>
</body>
</html>