<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Détails</title>
</head>
<body>
<div>
    <?php

    require 'array.php';

    $studentIndex = $_GET['studentindex'];
    $studentIndex = (int)$studentIndex;

    foreach ($studentsArray[$studentIndex] as $key => $data) {
        if ($key === "passions") {
            echo "<p>Passions : </p><ul>";
            foreach ($data as $passion) {
                echo "<li>" . $passion . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>" . $key . " : " . $data . "</p><br>";
        }
    }

    ?>

    <a href="index.php">Retour à la liste</a>
</div>

</body>
</html>

