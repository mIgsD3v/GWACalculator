<?php 

$unit1 = isset($_POST['unit1']) ? $_POST['unit1'] : "";
$unit2 = isset($_POST['unit2']) ? $_POST['unit2'] : "";
$unit3 = isset($_POST['unit3']) ? $_POST['unit3'] : "";
$grade1 = isset($_POST['grade1']) ? $_POST['grade1'] : "";
$grade2 = isset($_POST['grade2']) ? $_POST['grade2'] : "";
$grade3 = isset($_POST['grade3']) ? $_POST['grade3'] : "";


if(isset($_POST['clear'])) {

    $unit1 = "";
    $unit2 = "";
    $unit3 = "";
    $grade1 = "";
    $grade2 = "";
    $grade3 = "";
}


?>