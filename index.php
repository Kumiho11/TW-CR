<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principală - CS2</title>
    <link rel="stylesheet" href="css/stile.css">
    <script src="javascript/info-box.js" defer></script>
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


<h1>Cei mai buni jucători și evenimente grandioase</h1>
<div class="container">
    <section class="jucatori">
        <h2>Cei mai buni jucători ai momentului</h2>
        <ul>
            <li class="jucator">
                <img src="assets/img/s1mple.jpg" alt="s1mple" onclick="afiseazaInfo('info-s1mple')">
            </li>
            <li class="jucator">
                <img src="assets/img/zywoo.jpg" alt="zywoo" onclick="afiseazaInfo('info-zywoo')">
            </li>
            <li class="jucator">
                <img src="assets/img/monesy.jpg" alt="monesy" onclick="afiseazaInfo('info-monesy')">
            </li>
            <li class="jucator">
                <img src="assets/img/donk.jpg" alt="donk" onclick="afiseazaInfo('info-donk')">
            </li>
            <li class="jucator">
                <img src="assets/img/sh1ro.jpg" alt="sh1ro" onclick="afiseazaInfo('info-sh1ro')">
            </li>
        </ul>
    </section>
    <section class="evenimente">
        <h2>Evenimente grandioase în CS2</h2>
        <p>Turneul Internațional de CS2 din această lună a fost unul dintre cele mai așteptate evenimente ale
            anului.</p>
        <h3>Major-uri și echipe câștigătoare</h3>
        <ul>
            <li><strong>CS2 Major 2024 (Perfect World Shanghai Major):</strong> <em>Team Spirit</em> - a învins FaZe
                Clan 2-1.
            </li>
            <li><strong>CS2 Major 2024 (PGL Major Copenhagen):</strong> <em>Natus Vincere (Na'Vi)</em> - a dominat
                competiția.
            </li>
            <li><strong>CS:GO Major Championship 2023 (Paris Major):</strong> <em>Vitality</em> - a câștigat cu un joc
                remarcabil din partea lui ZywOo.
            </li>
            <li><strong>CS:GO Major Championship 2021 (PGL Major Stockholm):</strong> <em>Natus Vincere (Na'Vi)</em> -
                câștigător cu s1mple în formă maximă.
            </li>
            <li><strong>CS:GO Major Championship 2022 (PGL Major Antwerp):</strong> <em>FaZe Clan</em> - un final
                tensionat și o victorie meritată.
            </li>
            <li><strong>CS:GO Major Championship 2022 (IEM Rio Major):</strong> <em>Imperial Esports</em> - o
                performanță impresionantă.
            </li>
        </ul>
        <div class="poze-evenimente">
            <img src="assets/img/poza1.jpg" alt="Poza 1">
            <img src="assets/img/poza2.jpg" alt="Poza 2">
            <img src="assets/img/download.jpg" alt="Poza 3">
            <img src="assets/img/COD_PGL_2024_Major_Copenhagen_Navi_win-1024x576.jpg" alt="Poza 4">
        </div>
    </section>
</div>
<div id="info-box" class="info-box"></div>
</body>
</html>