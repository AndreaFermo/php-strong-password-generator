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