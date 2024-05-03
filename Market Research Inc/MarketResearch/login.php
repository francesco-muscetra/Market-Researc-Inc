<?php
$conn = new mysqli("localhost", "root", "", "indaginemercato");

// Controllo della connessione
if ($conn->connect_error) {
    echo "Connessione fallita: " . $conn->connect_error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM utenti WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Accesso consentito. Benvenuto, $username!";
        session_start();

        while ($row = $result->fetch_assoc()) {
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['cognome'] = $row['cognome'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['logged_in'] = TRUE;
            $_SESSION['admin'] = $row['admin'];
        }

        header("Location: ricerca.php");
        exit;
    } else {
        echo "Accesso negato. Username o password errati.";
        header("Location: login.php");
    }
}

$conn->close();
?>