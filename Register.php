### Fichier register.php
php
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare("INSERT INTO members (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            echo "Merci de vous être inscrit comme membre de Munity !";
        } else {
            echo "Erreur : " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Adresse e-mail invalide.";
    }
}

$conn->close();
?>

