
<?php
$text = "testuji zápis do souboru. \n";
$handle = @fopen('soubor.txt', 'a');
fwrite($handle, $text);

if ($handle === false) {
    echo 'Soubor se nepodařilo otevřít!';
} else {
    
    fclose($handle);
}

