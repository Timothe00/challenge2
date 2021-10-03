<?php

// On verifie si le formulaire a été envoyé
if(!empty($_POST)){
    // Le formulaire à bien été envoyé
    // On verifie que tous les champs requis sont remplis
    if(isset($_POST["nom"], $_POST["prenoms"], $_POST["mail"], $_POST["mot_de_passe"], $_POST["mdpassconf"])
    && !empty($_POST["nom"]) && !empty($_POST["prenoms"]) && !empty($_POST["mail"]) && !empty($_POST["mot_de_passe"]) && !empty($_POST["mdpassconf"]))
    {
        // le formulaire est complet
        // on récupère les données en les protegeant
        $nom = strip_tags($_POST["nom"]);
        if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
            die("L'addresse mail est incorrecte");
        }
          // on va hasher le mot de passe
          $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_ARGON2ID);
          
          if($_POST['mot_de_passe'] == $_POST['mdpassconf']) {
            require_once "sendinbase.php";
         } else {
            
            die("mot de passe est incomplet");
         }
         
        // on enregistre en base de données

       require_once "sendinbase.php";

     } else {
         die("le formulaire est incomplet");
    }
}