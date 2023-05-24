<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Wybierz figurę do obliczenia <br>
    1. Trójkąt <br>
    2. Prostokąt <br>
    3. Trapez <br>
    <input type="text" name="dane">
    <input type="submit">
</form>

<?php

function Trojkat ($a, $h){
  return ($a*$h)/2;
}
function Prostokat ($a, $b){
  return $a*$b;
}
function Trapez ($a, $b, $h){
    return (($a+$b)*$h)/2;
}

switch ($_POST['dane']) {
    case 1:
        return Trojkat($_POST['$a'], $_POST['$h']);
    case 2:
        return Prostokat($_POST['$a'], $_POST['$b']);
    case 3:
        return Trapez($_POST['$a'], $_POST['$b'], $_POST['$h']);
    default:
        echo "BŁĄD";
}