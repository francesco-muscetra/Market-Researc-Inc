<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Interfaccia</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Interfaccia Database</h1>

    <h2>Tabella Nazioni</h2>
    <table>
        <tr>
            <th>Codice Nazione</th>
            <th>Nome Nazione</th>
            <th>Numero Abitanti</th>
        </tr>
        <?php
        // Connessione al database
        $conn = mysqli_connect("localhost", "root", "", "indaginemercato");

        // Verifica della connessione
        if ($conn->connect_error) {
            die("Connessione fallita: " . $conn->connect_error);
        }

        // Query per selezionare i dati dalla tabella Nazioni
        $sql = "SELECT * FROM nazioni";
        $result = $conn->query($sql);

        // Visualizzazione dei dati
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["codNazione"]."</td>
                        <td>".$row["nomeNazione"]."</td>
                        <td>".$row["numAbitanti"]."</td>
                      </tr>";
            }
        } else {
            echo "0 risultati";
        }

        // Chiusura della connessione
        $conn->close();
        ?>
    </table>

    <h2>Tabella Prodotti</h2>
    <table>
        <tr>
            <th>Codice Prodotto</th>
            <th>Nome Prodotto</th>
        </tr>
        <?php
        // Connessione al database
        $conn = mysqli_connect("localhost", "root", "", "indaginemercato");

        // Verifica della connessione
        if ($conn->connect_error) {
            die("Connessione fallita: " . $conn->connect_error);
        }

        // Query per selezionare i dati dalla tabella Prodotti
        $sql = "SELECT * FROM prodotti";
        $result = $conn->query($sql);

        // Visualizzazione dei dati
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["codProdotto"]."</td>
                        <td>".$row["nomeProdotto"]."</td>
                      </tr>";
            }
        } else {
            echo "0 risultati";
        }

        // Chiusura della connessione
        $conn->close();
        ?>
    </table>

    <h2>Tabella Consumazioni</h2>
    <table>
        <tr>
            <th>ID Consumazione</th>
            <th>Quantita Consumata</th>
            <th>Quantita Importata</th>
            <th>Codice Nazione</th>
            <th>Codice Prodotto</th>
        </tr>
        <?php
        // Connessione al database
        $conn = mysqli_connect("localhost", "root", "", "indaginemercato");

        // Verifica della connessione
        if ($conn->connect_error) {
            die("Connessione fallita: " . $conn->connect_error);
        }

        // Query per selezionare i dati dalla tabella Prodotti
        $sql = "SELECT * FROM Consumazioni";
        $result = $conn->query($sql);

        // Visualizzazione dei dati
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["idCons"]."</td>
                        <td>".$row["quantitaConsumata"]."</td>
                        <td>".$row["quantitaImportata"]."</td>
                        <td>".$row["codNazione"]."</td>
                        <td>".$row["codProdotto"]."</td>
                      </tr>";
            }
        } else {
            echo "0 risultati";
        }

        // Chiusura della connessione
        $conn->close();
        ?>
    </table>

    <h2>Tabella Produzioni</h2>
    <table>
        <tr>
            <th>ID Consumazione</th>
            <th>Quantita Consumata</th>
            <th>Quantita Importata</th>
            <th>Codice Nazione</th>
            <th>Codice Prodotto</th>
        </tr>
        <?php
        // Connessione al database
        $conn = mysqli_connect("localhost", "root", "", "indaginemercato");

        // Verifica della connessione
        if ($conn->connect_error) {
            die("Connessione fallita: " . $conn->connect_error);
        }

        // Query per selezionare i dati dalla tabella Prodotti
        $sql = "SELECT * FROM Produzioni";
        $result = $conn->query($sql);

        // Visualizzazione dei dati
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["idProd"]."</td>
                        <td>".$row["quantitaProdotta"]."</td>
                        <td>".$row["quantitaEsportata"]."</td>
                        <td>".$row["codNazione"]."</td>
                        <td>".$row["codProdotto"]."</td>
                      </tr>";
            }
        } else {
            echo "0 risultati";
        }

        // Chiusura della connessione
        $conn->close();
        ?>
    </table>
</body>
</html>
