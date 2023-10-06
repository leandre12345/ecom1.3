<?php
require_once("functions.php");
var_dump($_POST);



if ($_POST) {
    $name = $_POST['fname'];
    if(empty($name)){
        echo "</br> Nom vide ";
    }
    else {
        echo "</br> Mon nom est :" . $name;
    }
}
/*$nameLengthIsValid = nameLengthIsValid($_POST['fname']);*/
echo '<br>';
$saltedName = addSalt($_POST['fname']);
var_dump($saltedName);

$encodeName = encodeName($saltedName);
echo"<br>";
echo $encodeName;
?>
<a href="./index.php">retour</a>