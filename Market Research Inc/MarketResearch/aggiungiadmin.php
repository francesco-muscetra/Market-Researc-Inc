<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi Amministratore</title>

    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/formstyle.css">
 
</head>
<body>

<?php
    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === false || $_SESSION['admin'] == 0) {
        // L'utente non è loggato, reindirizzalo alla pagina di login.
        header("Location:login.html");
        exit;
    }
    ?>
    <div class="navbar">
        <div class="logo-container">
            <img src="img/logo.png" alt="Logo Market Research Inc.">
        </div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="ricerca.php">Cerca</a></li>

            <?php

                    if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){

                        echo '<li><a href="aggiungiadmin.php">Aggiungi Admin</a></li>
                        <li><a href="aggiungidato.php">Aggiungi Dato</a></li>';
                    }
                
            ?>

            <li><a href="disconnetti.php">Disconnettiti</a></li>
        </ul>
    </div>
    <div class="login-container">
        <form action="registraadmin.php" method="post">
            <h2>Crea un nuovo utente amministratore</h2>
            <div class="input-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="input-group">
                <label for="cognome">Cognome</label>
                <input type="text" id="cognome" name="cognome" required>
            </div>

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            
            <button type="submit">Registra</button>
        </form>
    </div>
    <footer class="site-footer">
        <p>Francesco Mauramati | Francesco Muscetra | Francesco Macrì | Paolo Rainò</p>
        <p>IIS A. Meucci - Casarano</p>
        <p>Anno Scolastico 2023/2024</p>
    </footer>
</body>
</html>
