<?php

$days = [
    '12/02/2021' => [
        [
            'homeTeam' => 'Toronto',
            'guestTeam' => 'NYC',
            'pointsHomeTeam' => 14,
            'pointsGuestTeam' => 32
        ],
        [
            'homeTeam' => 'Bulls',
            'guestTeam' => 'Lakers',
            'pointsHomeTeam' => 24,
            'pointsGuestTeam' => 24
        ]
    ],
    '13/02/2021' => [
        [
            'homeTeam' => 'Warriors',
            'guestTeam' => 'Boston',
            'pointsHomeTeam' => 4,
            'pointsGuestTeam' => 42
        ],
        [
            'homeTeam' => 'Portland',
            'guestTeam' => 'Miami',
            'pointsHomeTeam' => 30,
            'pointsGuestTeam' => 22
        ]
    ],
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<h1> Partite NBA della settimana</h1>

<?php 
for($j = 0; $j < count($days['12/02/2021']); $j++ ){
    $dayMatch = $days['12/02/2021'][$j];
    echo "<p>". $dayMatch['homeTeam'] . " - " . $dayMatch['guestTeam'] . " | " . $dayMatch['pointsHomeTeam']. " - ". $dayMatch['pointsGuestTeam']. " </p>";
}
for($p = 0; $p < count($days['13/02/2021']); $p++ ){
    $dayMatch = $days['13/02/2021'][$p];
    echo "<p>". $dayMatch['homeTeam'] . " - " . $dayMatch['guestTeam'] . " | " . $dayMatch['pointsHomeTeam']. " - ". $dayMatch['pointsGuestTeam']. " </p>";
}

?>
</body>
</html>