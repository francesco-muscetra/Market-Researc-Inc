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

        input[type=text]{
            width: 205px;
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

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === false || $_SESSION['admin'] == 0) {
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
                
                    if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){

                        echo '<li><a href="aggiungiadmin.php">Aggiungi Admin</a></li>
                        <li><a href="aggiungidato.php">Aggiungi Dato</a></li>';

                    }
                
            ?>
            <li><a href="disconnetti.php">Disconnettiti</a></li>
        </ul>
    </div>

    <div class="container">
        <h1>Aggiungi dato</h1>

        <form method="post" action="inserimento.php"> <!-- Invia i dati del form a risultato.php -->
            <div class="menu-tendina">
                <label for="tabella">Seleziona la tabella:</label>
                <select name="tabella" id="tabella">
                    <option value="consumazioni">Consumazioni</option>
                    <option value="produzioni">Prodotti</option>
                </select>
            </div><br>

            <div class="menu-tendina">
                <label for="nazione">Seleziona la nazione:</label>
                <select name="nazione" id="nazione">
                    <option value="ARG">Argentina</option>
                    <option value="AUS">Australia</option>
                    <option value="AUT">Austria</option>
                    <option value="BEL">Belgio</option>
                    <option value="BGR">Bulgaria</option>
                    <option value="BRA">Brasile</option>
                    <option value="CAN">Canada</option>
                    <option value="CHN">Cina</option>
                    <option value="CYP">Cipro</option>
                    <option value="CZE">Repubblica Ceca</option>
                    <option value="DEU">Germania</option>
                    <option value="DNK">Danimarca</option>
                    <option value="ESP">Spagna</option>
                    <option value="EST">Estonia</option>
                    <option value="FIN">Finlandia</option>
                    <option value="FRA">Francia</option>
                    <option value="GBR">Regno Unito</option>
                    <option value="GRC">Grecia</option>
                    <option value="HRV">Croazia</option>
                    <option value="HUN">Ungheria</option>
                    <option value="IND">India</option>
                    <option value="IRL">Irlanda</option>
                    <option value="ITA">Italia</option>
                    <option value="LTU">Lituania</option>
                    <option value="LUX">Lussemburgo</option>
                    <option value="LVA">Lettonia</option>
                    <option value="MEX">Messico</option>
                    <option value="MLT">Malta</option>
                    <option value="NLD">Paesi Bassi</option>
                    <option value="POL">Polonia</option>
                    <option value="PRT">Portogallo</option>
                    <option value="ROU">Romania</option>
                    <option value="SVK">Slovacchia</option>
                    <option value="SVN">Slovenia</option>
                    <option value="SWE">Svezia</option>
                    <option value="USA">Stati Uniti</option>
                </select>
            </div><br>

            <div class="menu-tendina">
                <label for="prodotto">Seleziona il prodotto:</label>
                <select name="prodotto" id="prodotto">
                    <option value="1">Pane</option>
                    <option value="2">Latte</option>
                    <option value="3">Uova</option>
                    <option value="4">Soia</option>
                    <option value="5">Grano</option>
                    <option value="6">Cacao</option>
                    <option value="7">Ceci</option>
                    <option value="8">Riso</option>
                    <option value="9">Pasta</option>
                    <option value="10">Formaggio</option>
                    <option value="11">Yogurt</option>
                    <option value="12">Olio d'oliva</option>
                    <option value="13">Zucchero</option>
                    <option value="14">Sale</option>
                    <option value="15">Spezie</option>
                    <option value="16">Caffe</option>
                    <option value="17">The</option>
                    <option value="18">Cioccolato</option>
                    <option value="19">Miele</option>
                    <option value="20">Salsa di pomodoro</option>
                    <option value="21">Mele</option>
                    <option value="22">Banane</option>
                    <option value="23">Arance</option>
                    <option value="24">Uva</option>
                    <option value="25">Kiwi</option>
                    <option value="26">Fragole</option>
                    <option value="27">Limoni</option>
                    <option value="28">Pere</option>
                    <option value="29">Pesche</option>
                    <option value="30">Ananas</option>
                    <option value="31">Ciliegie</option>
                    <option value="32">Carote</option>
                    <option value="33">Patate</option>
                    <option value="34">Pomodori</option>
                    <option value="35">Cetrioli</option>
                    <option value="36">Lattuga</option>
                    <option value="37">Zucchine</option>
                </select>
            </div><br>
            <input type="text" name="produzioneconsumazione" placeholder="Quantita' consumata/prodotta (KG)">
            <input type="text" name="importoesporto" placeholder="Quantita' importata/esportata (KG)">
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