### Fichier config.php
php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Munity";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>
