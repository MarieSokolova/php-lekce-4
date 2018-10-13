
<?php
$text = '<p class="font-weight-bold">$_POST['surname']</p>'.'<br>'.$_POST['textarea'].'<hr>';
$handle = fopen('prispevky.txt', 'a');

if ($handle === false) {
    echo 'Soubor se nepodařilo otevřít!';
} else {
    fwrite($handle, $text);
    fclose($handle);
    echo "Příspěvky byly úspěšně uloženy.";
    echo '<p><a href = "/php-lekce-4/navstevni_kniha.php">Zpět na návštěvní knihu</a></p>';
}




