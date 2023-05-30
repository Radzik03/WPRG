<?php
function Narodowosc( $panstwo ) {

    $narodowosc = array
    (
        "Niemcy" => "Niemiecka",
        "Czechy" => "Czeska",
        "Słowacja" => "Słowacka",
        "Ukraina" => "Ukraińska",
        "Białoruś" => "Białoruska",
        "Litwa" => "Litewska",
        "RPA" => "Południowo afrykańska",
        "Izrael" => "Żydowska",
        "Australia" => "Australijska",
        "Anglia" => "Angielska",
        "Kanada" => "Kanadyjska",
        "Francja" => "Francuska",
        "Norwegia" => "Norweska",
        "Armenia" => "Ormiańska",
    );

    if ( array_key_exists ( $panstwo, $narodowosc ))
    {
        return $panstwo.", narodowość ".$narodowosc[$panstwo].'<br>'.'<br>';
    }
    else
    {
        return $panstwo." = > Brak danych".'<br>'.'<br>';
    }
}
echo Narodowosc("Niemcy");
echo Narodowosc("Czechy");
echo Narodowosc("Słowacja");
echo Narodowosc("Grecja");
echo Narodowosc("Ukraina");
echo Narodowosc("Armenia");
echo Narodowosc("Białoruś");
echo Narodowosc("Litwa");
echo Narodowosc("RPA");

