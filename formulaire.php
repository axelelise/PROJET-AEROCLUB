<html>
 <head>
 </head>
<body>
    <?php
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    $tel=$_POST["telephone"];
    $raison=$_POST["raison"];
    $ulm=$_POST["ulm"];
    $com=$_POST["message"];
    ?>

    <center>

        <h1> Résumé des imformations</h1>
        <br> <br> <br> <br>
        <p> <?php echo "Votre Nom : ". $nom ;?> </p>
        <p> <?php echo "Votre Prénom : ". $prenom ;?> </p>
        <p> <?php echo "Votre Email : ". $email ;?> </p>
        <p> <?php echo "Votre Numéro de télèphone : ". $tel ;?> </p>
        <p> <?php echo "Pourquoi vous nous contacté: ". $raison ;?> </p>
        <p> <?php echo "Quels genre d'ULM voulez piloter : ". $ulm ;?> </p>
        <p> <?php echo "Commentaire : ". $com ;?> </p>

    </center>

</body>
</html>