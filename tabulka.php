
<?php
$handle = fopen('soubor.csv', 'r');
if ($handle) {
    while (($line = fgets($handle, 4096)) !== false) {
        $row = explode(',', $line);
        echo 'Jméno: ' . $row[0] . ' ' . $row[1] . ', ';
        echo 'Datum: ' . $row[2] . ', ';
        echo 'Částka: ' . $row[3] . '<br>';
    }
    fclose($handle);
}

