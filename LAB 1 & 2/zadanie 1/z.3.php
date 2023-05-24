<?php
function cenzura($txt){

    $doCenzury = array('tego', 'nie', 'przeczytasz');

    foreach ($doCenzury as $slowo){

        $gwiazdki = str_repeat('*', strlen($slowo));
        $txt = str_ireplace($slowo, $gwiazdki, $txt);
    }

    return $txt;
}
echo cenzura("Tomek gra w piłkę tego nie przeczytasz");
