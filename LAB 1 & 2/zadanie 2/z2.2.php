<?php

function Narodowosc($panstwa) {


    $narodowosci = array(

        "Slask" => "Slaska",
        "Polska" => "Polska",
        "Niemcy" => "Niemiecka",
        "Afganistan" => "Afganska",
        "Francja" => "Francuska",
        "Peru" => "Peruwianska",
        "Ukraina" => "Ukrainska",
    );


    if (array_key_exists($panstwa, $narodowosci))
    {
        return $narodowosci[$panstwa];
    }
    else
    {
        return "Nieznana";
    }


}
echo Narodowosc("Slask");
echo Narodowosc("Kaszuby");
echo Narodowosc("Niemcy");
echo Narodowosc("Afganistan");
echo Narodowosc("Wlochy");
echo Narodowosc("RPA");
echo Narodowosc("Peru");
