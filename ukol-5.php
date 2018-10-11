<?php
function minimum($cislo1, $cislo2) {
    if(is_numeric($cislo1)&&is_numeric($cislo2)){
    if ($cislo1 < $cislo2){
    return $cislo1;
} elseif ($cislo1 > $cislo2){
    return $cislo2;
} else {
    return false;
  }  
}
}
$vysledek = minimum('56', '12.3');
if ($vysledek == false){
    echo "Chyba";
    } else {
        echo $vysledek;
            }



