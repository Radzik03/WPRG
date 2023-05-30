<?php
function cenzura($tekst){

    $doCenzury = array('tego', 'nie', 'przeczytasz');

    foreach ($doCenzury as $slowo){

        $gwiazdki = str_repeat('*', strlen($slowo));
        $tekst = str_ireplace($slowo, $gwiazdki, $tekst);
    }

    return $tekst;
}
echo cenzura("Tomek gra w piłkę tego nie przeczytasz");
