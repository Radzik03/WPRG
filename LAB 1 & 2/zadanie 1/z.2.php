<?php

function srednica($r){
    
    if ($r<=0){

        return "Wartosci musza byc wieksze od zera";
    }

    echo "Obszar okregu dla promienia ".$r." jest rowny ";

    return (2*$r);
}
echo srednica(5).'<br>';

echo srednica(-2).'<br>';

echo srednica(10).'<br>';

echo srednica(26).'<br>';

//średnica koła (promień).