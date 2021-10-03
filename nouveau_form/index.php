
<?php include_once 'verif.php';?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="feuille_de_style/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>page d'inscription</title>
    </head>
    <body>

    <form action="" method="POST">
        
        <h1>FORMULAIRE D'INSCRIPTION A IGS</h1>
        
        <div>
            <h5>NOM :</h5>
            <input class="inp2" type="text" placeholder="Noms" name="nom" value="" required >
        </div>

          <br>

        <div>
            <h5>PRENOMS :</h5>
            <input class="inp3" type="text" placeholder="Prenoms" name="prenoms" value="" required>
        </div>

          <br>

        <div>
            <h5>NIVEAU D'ETUDE :</h5>
            <select name="niveau_etude" id="">
                <option value="BAC">BAC</option>
                <option value="BAC +2">BAC +2</option>
                <option value="LICENCE PRO">LICENCE PRO</option>
                <option value="MASTER">MASTER</option>
                <option value="DOCTORAT">DOCTORAT</option>
            </select>
        </div>

           <br>

        <div>
            <h5>E-MAIL :</h5>
            <input class="inp4" type="mail" placeholder="E-mail" name="mail" value="" required>
        </div>

           <br>

        <div>
            <h5>MOT DE PASSE :</h5>
            <input class="inp5" type="password" 
             placeholder="votre mot de passe"
             name="mot_de_passe" value="" required >
        </div>
           <br>
        <div>
            <h5>CONFIRMER VOTRE MOT DE PASSE :</h5>
            <input type="password" 
             placeholder="mot de passe de confirmation"
             name="mdpassconf" required>
        </div>

        <button type="submit" name="envoyer">S'inscrire</button>

        <p>Vous êtes déjà inscrit? cliquez <a href="seconnecter.php">ici</a></p>

    </form>

</body>
</html>