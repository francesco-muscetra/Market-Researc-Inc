<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="stylesheet" href="css/template.css">
    <style>
        /* Stile per il bottone */
        input {
            padding: 7px 20px;
            background-color: #113458;            
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display:block; 
            margin: 0 auto;
            margin-top: 7px;
        }

        input:hover {
            background-color: #0056b3;
        }
    
        /* Stile per il menu a tendina */
        .menu-tendina {
            display:block; 
            margin: 0 auto;
            text-align: center;
        }
    
        .menu-tendina-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
    
        .menu-tendina-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
    
        .menu-tendina-content a:hover {
            background-color: #f1f1f1;
        }
    
        .menu-tendina:hover .menu-tendina-content {
            display: block;
        }
    
    </style>
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

    <div class="container">
        <h1>Ricerca dati</h1>

        <form method="post" action="query4.php"> <!-- Invia i dati del form a risultato.php -->
            <div class="menu-tendina">
                <label for="opzione">Seleziona il prodotto:</label>
                <select name="opzione" id="opzione">
                    <option value="Pane">Pane</option>
                    <option value="Latte">Latte</option>
                    <option value="Uova">Uova</option>
                    <option value="Soia">Soia</option>
                    <option value="Grano">Grano</option>
                    <option value="Cacao">Cacao</option>
                    <option value="Ceci">Ceci</option>
                    <option value="Riso">Riso</option>
                    <option value="Pasta">Pasta</option>
                    <option value="Formaggio">Formaggio</option>
                    <option value="Yogurt">Yogurt</option>
                    <option value="Olio d'oliva">Olio d'oliva</option>
                    <option value="Zucchero">Zucchero</option>
                    <option value="Sale">Sale</option>
                    <option value="Spezie">Spezie</option>
                    <option value="Caffe">Caffe</option>
                    <option value="The">The</option>
                    <option value="Cioccolato">Cioccolato</option>
                    <option value="Miele">Miele</option>
                    <option value="Salsa di pomodoro">Salsa di pomodoro</option>
                    <option value="Mele">Mele</option>
                    <option value="Banane">Banane</option>
                    <option value="Arance">Arance</option>
                    <option value="Uva">Uva</option>
                    <option value="Kiwi">Kiwi</option>
                    <option value="Fragole">Fragole</option>
                    <option value="Limoni">Limoni</option>
                    <option value="Pere">Pere</option>
                    <option value="Pesche">Pesche</option>
                    <option value="Ananas">Ananas</option>
                    <option value="Ciliegie">Ciliegie</option>
                    <option value="Carote">Carote</option>
                    <option value="Patate">Patate</option>
                    <option value="Pomodori">Pomodori</option>
                    <option value="Cetrioli">Cetrioli</option>
                    <option value="Lattuga">Lattuga</option>
                    <option value="Zucchine">Zucchine</option>
                </select>
            </div>
            <br>
            <input type="submit" value="Invia">
        </form>
    </div>

    <footer class="site-footer">
        <p>Francesco Mauramati | Francesco Muscetra | Francesco Macrì | Paolo Rainò</p>
        <p>IIS A. Meucci - Casarano</p>
        <p>Anno Scolastico 2023/2024</p>
    </footer>
</body>
</html>