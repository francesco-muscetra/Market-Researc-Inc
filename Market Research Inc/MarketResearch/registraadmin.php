<?php
$conn = new mysqli("localhost", "root", "", "indaginemercato");

// Controllo della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO utenti (nome, cognome, username, email, password, admin) VALUES ('$nome', '$cognome', '$username', '$email', '$password', 1)";

    if ($conn->query($sql) === TRUE) {
        echo "Utente registrato con successo! Ora eseguire il login!";
    } else {
        echo "Errore durante l'inserimento del record: l'username inserito è già stato utilizzato." . $conn->error;
    }

    header("Location: aggiungiadmin.php");

    exit;
}

// Chiusura della connessione
$conn->close();
?>
