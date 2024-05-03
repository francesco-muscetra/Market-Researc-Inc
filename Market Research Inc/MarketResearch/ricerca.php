<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricerca dati</title>
    
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/ricerca.css">
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === false) {
        // L'utente non è loggato, reindirizzalo alla pagina di login.
        header("Location: login.html");
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

                // Verifica se l'utente è loggato così che non gli escono le pagine login e registrazione
                    if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){

                        echo '<li><a href="aggiungiadmin.php">Aggiungi Admin</a></li>
                        <li><a href="aggiungidato.php">Aggiungi Dato</a></li>';
                    }  
            ?>

            <li><a href="disconnetti.php">Disconnettiti</a></li>
        </ul>
    </div>



    <h1>Ricerca dati</h1>

    <div class="griglia-bottoni">
        <div class="bottone">
            <a href="query1.php">
                <img src="img/consumazione.png">
            </a>
            <h2>Quantità consumata per abitante</h2>
        </div>

        <div class="bottone">
            <a href="query2.php">
                <img src="img/produzione.png">
            </a>
            <h2>Quantità prodotta per abitante</h2>
        </div>

        <div class="bottone">
            <a href="query3.php">
                <img src="img/differenza.png">
            </a>
            <h2>Differenza importazione per abitante</h2>
        </div>

        <div class="bottone">
            <a href="massimaimportazione.php">
                <img src="img/maggiore.png">
            </a>
            <h2>Maggiore importazione per abitante</h2>
        </div>
    </div>

    <footer class="site-footer">
        <p>Francesco Mauramati | Francesco Muscetra | Francesco Macrì | Paolo Rainò</p>
        <p>IIS A. Meucci - Casarano</p>
        <p>Anno Scolastico 2023/2024</p>
    </footer>
</body>
</html>
