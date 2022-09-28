<?php
$competitions = $competitions = [
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
$partecipants = [
    [
        'id' => 1,
        'name' => 'John Doe',
        'age' => 25,
        'ville' => 'Paris',
        'competition_id' => 1,
    ],
    [
        'id' => 2,
        'name' => 'Jane Doe',
        'age' => 30,
        'ville' => 'Lyon',
        'competition_id' => 1,
    ],
    [
        'id' => 3,
        'name' => 'Poe Doe',
        'age' => 25,
        'ville' => 'Paris',
        'competition_id' => 2,
    ],
    [
        'id' => 4,
        'name' => 'Marc Doe',
        'age' => 30,
        'ville' => 'Lyon',
        'competition_id' => 2,
    ],
    [
        'id' => 5,
        'name' => 'Jake Doe',
        'age' => 25,
        'ville' => 'Paris',
        'competition_id' => 3,
    ],
    [
        'id' => 6,
        'name' => 'Ladd Doe',
        'age' => 30,
        'ville' => 'Lyon',
        'competition_id' => 3,
    ],
    [
        'id' => 7,
        'name' => 'Husain Doe',
        'age' => 25,
        'ville' => 'Paris',
        'competition_id' => 4,
    ],
    [
        'id' => 8,
        'name' => 'Parker Doe',
        'age' => 30,
        'ville' => 'Lyon',
        'competition_id' => 4,
    ],
    [
        'id' => 9,
        'name' => 'Ming Hui Doe',
        'age' => 25,
        'ville' => 'Paris',
        'competition_id' => 5,
    ],
    [
        'id' => 10,
        'name' => 'Ranger Doe',
        'age' => 30,
        'ville' => 'Lyon',
        'competition_id' => 5,
    ],
];
$id = $_GET['id']-1;
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
                <h1>Association Des Sports</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div>Compétition : <?= $competitions[$id]['name'] ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Participants</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul>
                    <?php foreach ($partecipants as $partecipant) : ?>
                        <?php if ($partecipant['competition_id'] == $id) : ?>
                            <li>
                                <?= $partecipant['name'] ?>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>