<?php

function pesel($id){


    if (strlen($id)!=11){
        return "niepoprawny numer";
    }else

        if ($id[2]>=2){

            $yy = "20".$id[0].$id[1];

        }else {

            $yy = "19" . $id[0] . $id[1];
        }

    $dd = $id[4].$id[5];

    $mm = (($id[2].$id[3]));

    if ($mm>12) {


        $mm-=20;

        if ($mm == 1 || $mm == 3 || $mm == 5 || $mm == 7 || $mm == 8 || $mm == 10 || $mm == 12) {


            if ($dd <= 31 && $dd >= 1) {
                if ($mm<10) {
                    return "Twoj dzien urodzenia to: " . $dd . '-0' . $mm . '-' . $yy . '<br>';
                }else return "Twoj dzien urodzenia to: " . $dd . '-' . $mm . '-' . $yy . '<br>';
            }else return "Podales nieprawidlowy numer<br>";


        }else if ($mm==2){


            if ($dd <= 28 && $dd >= 1) {
                return "Twoj dzien urodzenia to: " . $dd . '-0' . $mm . '-' . $yy . '<br>';
            }else return "Podales nieprawidlowy numer<br>";


        }else if ($mm == 4 || $mm == 6 || $mm == 9 || $mm == 11){


            if ($dd <= 30 && $dd >= 1) {
                if ($mm<10) {
                    return "Your birthday is: " . $dd . '-0' . $mm . '-' . $yy . '<br>';

                }else return "Twoj dzien urodzenia to: " . $dd . '-' . $mm . '-' . $yy . '<br>';
            }else return "Podales nieprawidlowy numer<br>";
        }


    }else if ($mm<=12){


        if ($mm == 1 || $mm == 3 || $mm == 5 || $mm == 7 || $mm == 8 || $mm == 10 || $mm == 12) {


            if ($dd <= 31 && $dd >= 1) {
                if ($mm<10) {
                    return "Twoj dzien urodzenia to: " . $dd . '-' . $mm . '-' . $yy . '<br>';

                }else return "Twoj dzien urodzenia to: " . $dd . '-' . $mm . '-' . $yy . '<br>';
            }else return "Podales nieprawidlowy numer<br>";


        }else if ($mm==2){


            if ($dd <= 28 && $dd >= 1) {
                return "Twoj dzien urodzenia to: " . $dd . '-' . $mm . '-' . $yy . '<br>';
            }else return "Podales nieprawidlowy numer<br>";


        }else if ($mm == 4 || $mm == 6 || $mm == 9 || $mm == 11){


            if ($dd <= 30 && $dd >= 1) {
                if ($mm<10) {
                    return "Twoj dzien urodzenia to: " . $dd . '-' . $mm . '-' . $yy . '<br>';
                }else return "Twoj dzien urodzenia to: " . $dd . '-' . $mm . '-' . $yy . '<br>';
            }else return "Podales nieprawidlowy numer<br>";
        }


    }else return "Podales nieprawidlowy numer<br>";
}
echo pesel('03260763623');
echo pesel('86050584943');
echo pesel('783983489984');
echo pesel('00291178388');

// PESEL.
