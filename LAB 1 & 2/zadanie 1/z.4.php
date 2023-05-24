<?php
function PESEL($pesel){

    if (strlen($pesel) !== 11) {
        return "Błędny PESEL".'<br>';
    }
    if (ctype_digit($pesel) === false) {
        return "Błędny PESEL".'<br>';
    }

    $rok = substr($pesel, 0, 2);
    $miesiac = substr($pesel, 2, 2);
    $dzien = substr($pesel, 4, 2);

    $wiek = substr($pesel, 2, 1);
    $wiek += 2;
    $wiek %= 10;
    $wiek = round($wiek / 2, 0, PHP_ROUND_HALF_DOWN);
    $wiek += 18;
    $rok = $wiek.$rok;
    $miesiac = str_pad($miesiac % 20, 2, '0', STR_PAD_LEFT);


    if ($rok < 1800 || $rok > 2299) {
        return "Błędny PESEL".'<br>';
    }
    if ($miesiac < 1 || $miesiac > 12) {
        return "Błędny PESEL".'<br>';
    }
    if ($dzien < 1 || $dzien > cal_days_in_month(CAL_GREGORIAN, $miesiac, $rok)) {
        return "Błędny PESEL".'<br>';
    }

    return " ". $dzien . '-' . $miesiac . '-' . $rok . '<br>';
}
echo PESEL('90121183982');
echo PESEL('03250565748');
echo PESEL('00281374848');
echo PESEL('00081374848');
echo PESEL('00881374848');
echo PESEL('684374784888');
echo PESEL('68101943473');





