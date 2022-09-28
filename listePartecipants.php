<?php
//page to show all partecipants and their competitions
$competitions = $competitions = [
    [
        'id' => 1,
        'name' => 'Marathon de Paris',
        'date' => '2021-01-01',
        'location' => 'Paris',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
        'winner' => 'John Doe',
    ],
    [
        'id' => 2,
        'name' => 'Gran trail des Mountains',
        'date' => '2021-01-02',
        'location' => 'Lyon',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
        'winner' => 'Poe Doe',
    ],
    [
        'id' => 3,
        'name' => 'Championnat de France de course à pied',
        'date' => '2021-01-03',
        'location' => 'Marseille',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
        'winner' => 'Jake Doe',
    ],
    [
        'id' => 4,
        'name' => 'Marathon de Bordeaux',
        'date' => '2021-01-04',
        'location' => 'Bordeaux',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
        'winner' => 'Husain Doe',
    ],
    [
        'id' => 5,
        'name' => 'PDGA Eurotour 2021 à Lille', 
        'date' => '2021-01-05',
        'location' => 'Lille',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
        'winner' => 'Paul Doe',
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
    [
        'id' => 11,
        'name' => 'Paul Doe',
        'age' => 25,
        'ville' => 'Paris',
        'competition_id' => 5,
    ],
    [
        'id' => 12,
        'name' => 'Pauline Doe',
        'age' => 30,
        'ville' => 'Lyon',
        'competition_id' => 5,
    ],
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
        <h1 class="text-center">Liste des participants</h1>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Age</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Compétition</th>
                            <th scope="col">Gagnant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($partecipants as $partecipant): ?>
                            <tr>
                                <td><?= $partecipant['name'] ?></td>
                                <td><?= $partecipant['age'] ?></td>
                                <td><?= $partecipant['ville'] ?></td>
                                <td>
                                    <?php foreach($competitions as $competition): ?>
                                        <?php if($competition['id'] === $partecipant['competition_id']): ?>
                                            <?= $competition['name'] ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <?php foreach($competitions as $competition): ?>
                                        <?php if($competition['winner'] === $partecipant['name']): ?>
                                            Champion
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>