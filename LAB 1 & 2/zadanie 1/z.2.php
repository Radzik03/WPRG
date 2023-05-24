<?php
function srednica($r){

    if ($r<=0){
        return "niepoprawne dane";
    }
    echo "Obszar koła dla promienia ".$r." jest równy "; return (2*$r);
}
function pole($p){

    if ($p<=0){
        return "niepoprawne dane";
    }
    echo "I pole koła dla promienia ".$p. " jest równe "; return (3.14*$p*$p);
}

echo srednica(5).'<br>';
echo pole(5).'<br>';

echo srednica(10).'<br>';
echo pole(10).'<br>';

echo srednica(-2).'<br>';
echo pole(-2).'<br>';

echo srednica(26).'<br>';
echo pole(26).'<br>';

