
<?php
$data = file_get_contents('data.txt');
$data = $data . 'Tento text přidám na konec souboru.';
file_put_contents('data.txt', $data);

