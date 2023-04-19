<?php


function trojkat($a, $h){

    if ($a<=0) {
        return" 'a' jest mniejsze od 0! ".'<br>';
    }

    if ($h<=0){
        return " 'h' jest mniejsze od 0!  ".'<br>';
    }

    return " powierzchnia trojkata " . $a*(0.5*$h).'<br>';
}



function prostokat($a,$h){
    if ($a<=0) {
        return" 'a' jest mniejsze od 0! ".'<br>';
    }
    if ($h<=0){
        return " 'h' jest mniejsze od 0!  ".'<br>';
    }
    return " powierzchnia prostokata " . $a*$h.'<br>';
}



function trapez($a,$b,$h){
    if ($a<=0) {
        return" 'a' jest mniejsze od 0! ".'<br>';

    }
    if ($b<=0){
        return " 'b' jest mniejsze od 0! ".'<br>';
    }
    if ($h<=0) {
        return"  'h' jest mniejsze od 0!  ".'<br>';
    }

    return " powierzchnia trapezu " . ((($a+$b)*$h)*0.5).'<br>';



}
function wybor($num, $a, $b  , $h){
    switch ($num){
        case 1:
            return trojkat($a,$h);
        case 2:
            return prostokat($a,$h);
        case 3:
            return trapez($a,$b,$h);
        default:
            echo "niepoprawny numer!";
    }
}


echo wybor(1,3,0,5).'<br>';
echo wybor(2,3,0,5).'<br>';
echo wybor(3,3,4,5).'<br>';
echo wybor(1,-2,0,5).'<br>';
echo wybor(2,3,0,-5).'<br>';
echo wybor(3,3,-8,5).'<br>';
echo wybor(5,3,0,5).'<br>';
