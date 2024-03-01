<?php

require_once("Config/autoload.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <?php

    $table = "employees";
    $repo = new \Repository\GenericRepository($table);
    $service = new Service\EmployeeService($repo);
    $controller = new Controller\EmployeeController($service);

    $controller->route();
    // la finalité c'est que je vias rendre une vue dans index.php
    // si je suis en GET et que je rentre dans la deuxiéme condition
    // je inclure dans index.php lister_emprunt.php avec des cariables à l'intérieur
    



    ?>

</body>

</html>