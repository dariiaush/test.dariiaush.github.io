<?php

$daysn = date('t',$_POST["date"]);
$percent = 0.1;
$daysy = 365 + date('L',$_POST["date"]);

$year = $_POST["time"];

if (isset($_POST["refill"])) { 
    $dR = ($_POST["refill"]);
        if ($dR == "yes") {
            $result = $_POST["sum"] + ($_POST["sum"] + $_POST["deposit"]) * $daysn * ($percent / $daysy * $year);
            $result = round($result);
            echo json_encode($result);
        } else {
            $result = $_POST["sum"] + $_POST["sum"] * $daysn * ($percent / $daysy * $year);
            $result = round($result);
            echo json_encode($result);
        }
}

?>