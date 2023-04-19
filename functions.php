<?php


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