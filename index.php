<?php

require_once "./vendor/autoload.php";

function createPerson()
{
    $faker = Faker\Factory::create();

    $person = [
        "name" => $faker->name(),
        "emaill" => $faker->email(),
        "message" => $faker->text()
    ];
}
?>

<!DOCTYPE html>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hello!</title>
    <style>
        @import './src/public/assets/bootstrap.min.css';
    </style>
</head>

<body>

    <h1>Gerador de Pessoas</h1>
    
</body>

</html>