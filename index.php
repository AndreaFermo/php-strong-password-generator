<?php
    $characters = [
        ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
        ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'],
        ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
        ['!', '?', '-', '.', ',', '@', '+']
    ];

    $cycles = 5;

    function generatePassword($array, $times) {
        $pass=[];
        for ($i=0 ; $i < $times; $i++) {
            $n = rand(0, (count($array)-1));
            $character = $array[$n][rand(0, (count($array[$n])-1))];
            $pass[] = $character;
        };
        $result = implode($pass);
        return $result;
    };

    $password = generatePassword($characters, $cycles);

    echo $password;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="">Strong Password Generator</h1>
    </div>
    
</body>
</html>