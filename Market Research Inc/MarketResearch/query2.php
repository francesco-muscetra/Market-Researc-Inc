<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Interfaccia</title>
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/query.css";>
    
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

    <h1>Quantità prodotta per abitante</h1>
    
    <table>
        <tr>
            <th>Nome Nazione</th>
            <th>Nome Prodotto</th>
            <th>Rapporto</th>
        </tr>
        <?php
        // Connessione al database
        $conn = mysqli_connect("localhost", "root", "", "indaginemercato");

        // Verifica della connessione
        if ($conn->connect_error) {
            die("Connessione fallita: " . $conn->connect_error);
        }

        $sql = "SELECT n.nomeNazione AS NomeNazione, p.nomeProdotto AS NomeProdotto, (pr.quantitaProdotta/n.numAbitanti) AS Rapporto
        FROM nazioni n, prodotti p, produzioni pr
        WHERE n.codNazione = pr.codNazione AND p.codProdotto = pr.codProdotto
        GROUP BY n.nomeNazione, p.nomeProdotto;";
        $result = $conn->query($sql);

        // Visualizzazione dei dati
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["NomeNazione"]."</td>
                        <td>".$row["NomeProdotto"]."</td>
                        <td>".$row["Rapporto"]."</td>
                      </tr>";
            }
        } else {
            echo "0 risultati";
        }

        // Chiusura della connessione
        $conn->close();
        ?>
    </table>

    <footer class="site-footer">
        <p>Francesco Mauramati | Francesco Muscetra | Francesco Macrì | Paolo Rainò</p>
        <p>IIS A. Meucci - Casarano</p>
        <p>Anno Scolastico 2023/2024</p>
    </footer>
</body>
</html>
