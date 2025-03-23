<?php

require_once "./vendor/autoload.php";

function createPerson()
{
    $faker = Faker\Factory::create();

    $person = [
        "name" => $faker->name(),
        "email" => $faker->email(),
        "message" => $faker->text()
    ];

    return $person;
}

function showPeople(int $quantity)
{
    for ($i = 1; $i <= $quantity; $i++) {

        $person = createPerson();

        $name = $person['name'];
        $email = $person['email'];
        $message = $person['message'];

        echo "
        <div class='card mt-3'>
                    <div class='card-header'>
                        <h3>
                            $name
                        </h3>
                    </div>
                    <div class='card-body'>
                        <p>
                            <span class='fw-bold'>
                                Email:
                            </span>
                            $email
                        </p>

                        <div class='card-text'>
                            <span class='fw-bold'>
                            Mensagem: 
                            </span>
                            <div>
                            $message
                            </div>
                        </div>
                        <code class='mt-2'>
                            <pre>".
                            json_encode($person, JSON_PRETTY_PRINT)
                            ."
                            </pre>
                        </code>
                    </div>
                </div>
        ";
    }
}

?>

<!DOCTYPE html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hello!</title>
    <style>
        @import './vendor/twbs/bootstrap/dist/css/bootstrap.min.css';
    </style>
</head>

<body>

    <main class='p-3'>
        <h1>Gerador de Pessoas</h1>

        <p class='my-3'>Atualize a página para conhecer novas pessoas :)</p>

        <?php

            showPeople(10);

        ?>


    </main>

</body>
<script src='/vendor/components/jquery/jquery.min.js"></script>
<script>
</script>

</html>