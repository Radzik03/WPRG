<?php

function cenzura($text){
    $tab =['Tomek', 'gra', 'bramkarzem'];

    foreach ($tab as $item){

        $cens = str_repeat('*',strlen($item));

        $text= str_ireplace($item, $cens, $text);
    }
    return $text;
}
echo cenzura("Tomek gra w pilke i jest bramkarzem");
