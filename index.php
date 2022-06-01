<!-- définir mes variables -->
<?php
$nom = "Moncieu";
$prenom = "Adrien";
$age = 32;
$email = "email@gmail.com";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First test PHP</title>
</head>

<body>

    <h1>Présentation: </h1>

    <!-- afficher mes variables -->
    <p> Je suis <?php echo $nom . " " . $prenom ?> et j'ai <?php echo $age ?> ans.
        <br />
        Contactez-moi à: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>

    </p>



    <!-- affichage conditionel -->
    <?php if ($age >= 18) { ?>
        <p>je suis majeur</p>
    <?php } ?>


    <!-- affichage avec une boucle for -->
    <h2>Blog</h2>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <article>
            <h3>Actu <?php echo $i; ?></h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Ipsam voluptatibus quo perferendis nemo facere? Labore ea
                tempora mollitia alias praesentium eligendi optio, dolores
                possimus provident impedit quam explicabo laboriosam veniam.
            </p>
        </article>
    <?php } ?>
</body>

</html>