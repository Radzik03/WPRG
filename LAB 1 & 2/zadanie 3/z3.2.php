<?php
function kostka($rzuty)
{
        for ($Lw = 0; $Lw < $rzuty; $Lw++)
        {
            $wynik[$Lw] = rand(1, 6);

            return $wynik[$Lw];
        }
}
     $rzuty = 11;
for ($rzut = 0; $rzut < $rzuty; $rzut++) {

    echo kostka($rzuty)." ";
}

