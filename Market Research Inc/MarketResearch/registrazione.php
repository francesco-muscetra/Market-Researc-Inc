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

    $sql = "INSERT INTO utenti (nome, cognome, username, email, password) VALUES ('$nome', '$cognome', '$username', '$email', '$password')";

    try{
        $result = $conn->query($sql);

        if(!$result){
            throw new Exception("Username già presente!");
        }
        if ($conn->query($sql) === TRUE) {
            echo("Utente registrato con successo! Ora eseguire il login!");
        }
    }
    catch(Exception $e){
        $_SESSION['msg'] = 'Errore, username già registrato.';
        header("Location: registrazione.php");
    }
    header("Location: home.php");
}

// Chiusura della connessione
$conn->close();
?>
