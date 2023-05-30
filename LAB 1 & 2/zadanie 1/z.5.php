<?php

function Trojkat ($a, $h){
    echo "Pole trójkąta o wymiarach a = ".$a." i h = ".$h." jest równe: ";
    return($a*$h)/2;
}
function Prostokat ($a, $b){
    echo "Pole prostokata o wymiarach a = ".$a." i b = ".$b." jest równe: ";
    return $a*$b;
}
function Trapez ($a, $b, $h){
    echo "Pole trapezu o wymiarach a = ".$a.", b = ".$b." i h = ".$h." jest równe: ";
    return (($a+$b)*$h)/2;
}
function wybor($numer, $a, $b, $h){

    switch ($numer){

        case 1:
            return Trojkat($a,$h);

        case 2:
            return Prostokat($a,$b);

        case 3:
            return Trapez($a,$b,$h);

        default:
            echo "Nie ma takiego wyboru";
    }
}
echo wybor(1,3,0,3).'<br>';
echo wybor(2,3,3,0).'<br>';
echo wybor(3,3,3,3).'<br>';
