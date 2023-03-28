<?php
    //model 1
    $age = array("Petter"=>"35", "Ben"=>"37", "Joe"=>"43");

    header("Content-Type: application/json");
    echo json_encode($age);