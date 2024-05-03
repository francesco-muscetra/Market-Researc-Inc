<?php
$conn = new mysqli("localhost", "root", "", "indaginemercato");

// Controllo della connessione
if ($conn->connect_error) {
    echo "Connessione fallita: " . $conn->connect_error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tabella = $_POST['tabella'];
    $nazione = $_POST['nazione'];
    $prodotto = $_POST['prodotto'];
    $produzioneconsumazione = $_POST['produzioneconsumazione'];
    $importoesporto = $_POST['importoesporto'];

    if($tabella=="produzioni"){
        $var1="quantitaProdotta";
        $var2="quantitaEsportata";
    }
    else{
        $var1="quantitaConsumata";
        $var2="quantitaImportata";
    }

    $sql = "INSERT INTO $tabella ($var1, $var2, codNazione, codProdotto) VALUES ('$produzioneconsumazione', '$importoesporto', '$nazione', '$prodotto')";

    if ($conn->query($sql) === TRUE) {
        echo "Inserimento avvenuto con successo!";
    } else {
        echo "Inserimento fallito.";
    }
    
    // Effettua il reindirizzamento
    header("Location: aggiungidato.php");
    exit;
}

$conn->close();
?>