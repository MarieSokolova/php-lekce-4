<?php
if (!file_exists('pristupy.txt')) {
echo 'Vítejte, na této stránce jste prvně!';
} else {
  $handle = fopen('pristupy.txt', 'r');
  if ($handle === false) {
      echo: 'Chyba při otevírání souborů';
      exit;
      }
  echo 'Historie přístupů:<br>';
    echo fread($handle, 1000)
    fclose($handle);
}

$handle = fopen('pristupy.txt', 'a');
fwrite ($handle, date('Y-m-d H:i:s').'<br>');
 fclose($handle);
