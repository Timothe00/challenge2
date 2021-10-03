<?php
$servername = 'localhost';
$username = 'root';
$password = '';
try{
    $conn = new PDO("mysql:host=$servername;dbname=fiche_etudiant", $username, $password);

    $nom = $_POST['nom'];
    $prenoms = $_POST['prenoms'];
    $niveau_etude = $_POST['niveau_etude'];
    $mail = $_POST['mail'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO registre (nom, prenoms, niveau_etude, mail, mot_de_passe)
    VALUES ('$nom', '$prenoms', '$niveau_etude', '$mail', '$mot_de_passe' )";
    $conn->exec($sql);
    echo "inscription réussie!";
} catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
