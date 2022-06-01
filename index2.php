<!-- Même exercice en utilisant uniquement echo -->

<?php
$firstname = "Jessica";
$lastname = "Alba";
$age = 41;
$email = "jess@lebocal.academy"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    echo "<h2>Présentation</h2>
    <p> Je suis $firstname $lastname et j'ai $age ans.</p>
    <p> Contactez-moi à: <a href='mailto:$email'> $email </a>";

    if ($age >= 18) {
        echo "<p>Je suis majeure</p>";
    }

    echo "<h2>Blog</h2>";

    for ($i = 1; $i <= 5; $i++) {
        echo "<article>
            <h3>Actu $i</h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsam voluptatibus quo perferendis nemo facere? Labore ea 
                tempora mollitia alias praesentium eligendi optio, dolores 
                possimus provident impedit quam explicabo laboriosam veniam.
            </p>
        </article>";
    } ?>
</body>

</html>