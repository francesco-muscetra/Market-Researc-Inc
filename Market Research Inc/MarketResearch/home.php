<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Research Inc.</title>
    <link rel="stylesheet" href="css/template.css">
</head>

<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="img/logo.png" alt="Logo Market Research Inc.">
        </div>
        <ul>
            <li><a href="home.php"">Home</a></li>
            <?php
                session_start();

                // Verifica se l'utente è loggato così che non gli escono le pagine login e registrazione
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                    echo '<li><a href="ricerca.php">Cerca</a></li>';

                    if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){

                        echo '<li><a href="aggiungiadmin.php">Aggiungi Admin</a></li>
                        <li><a href="aggiungidato.php">Aggiungi Dato</a></li>';
                        

                    }

                    echo '<li><a href="disconnetti.php">Disconnettiti</a></li>';
                } else {
                    echo '<li><a href="login.html">Login</a></li>
                    <li><a href="registrazione.html">Registrati</a></li>
                    <li><a href="ricerca.php">Cerca</a></li>';
                }
            ?>
        </ul>
    </div>
    
    <div class="container">
        <h1>Market Research Inc.</h1>
        <p>Leader nelle indagini di mercato sui prodotti alimentari internazionali</p>
        <h2>Chi Siamo</h2>
        <p>Market Research Inc. è specializzata nelle indagini di mercato per prodotti alimentari presenti nei mercati esteri. Analizziamo dettagliatamente la quantità di prodotti consumati e prodotti in ogni nazione, offrendo dati preziosi per orientare le strategie di esportazione delle aziende alimentari.</p>
        <h2>I Nostri Servizi</h2>
        <ul>
            <li>Analisi del consumo per abitante per prodotto in diverse nazioni.</li>
            <li>Quantità di prodotti alimentari prodotti internamente per nazione.</li>
            <li>Confronto tra consumo e produzione per identificare potenziali mercati di esportazione.</li>
        </ul>
        <h2>Contattaci</h2>
        <p>Per saperne di più sui nostri servizi o richiedere un preventivo, contattaci a:</p>
        <p>Email: info@marketresearchinc.com</p>
        <p>Telefono: +39 02 1234567</p>
    </div>
    
    <div class="site-footer">
        <p>Francesco Mauramati | Francesco Muscetra | Francesco Macrì | Paolo Rainò</p>
        <p>IIS A. Meucci - Casarano</p>
        <p>Anno Scolastico 2023/2024</p>
    </div>
</body>
</html>
