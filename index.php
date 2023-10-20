<?php
require 'vendor/autoload.php';

$id = null;
$szablon = 'szablony/strona_glowna.php';
if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if(file_exists("szablony/strona_{$id}.php")){
        $szablon = "szablony/strona_{$id}.php";
    }
}
var_dump($szablon);
?>


<?php include 'szablony/naglowek.php'?>

<?php include $szablon;?>

<?php include 'szablony/stopka.php'?>