<?php
//list of fake competitions
$competitions = [
    [
        'id' => 1,
        'name' => 'Marathon de Paris',
        'date' => '2021-01-01',
        'location' => 'Paris',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
    ],
    [
        'id' => 2,
        'name' => 'Gran trail des Mountains',
        'date' => '2021-01-02',
        'location' => 'Lyon',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
    ],
    [
        'id' => 3,
        'name' => 'Championnat de France de course à pied',
        'date' => '2021-01-03',
        'location' => 'Marseille',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
    ],
    [
        'id' => 4,
        'name' => 'Marathon de Bordeaux',
        'date' => '2021-01-04',
        'location' => 'Bordeaux',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
    ],
    [
        'id' => 5,
        'name' => 'PDGA Eurotour 2021 à Lille', 
        'date' => '2021-01-05',
        'location' => 'Lille',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Competitions | Association Des Sports</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Compétitions</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($competitions as $competition) : ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $competition['name'] ?></h5>
                            <a href="show.php?id=<?= $competition['id'] ?>" class="btn btn-primary">Voir la compétition</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
</body>
</html>