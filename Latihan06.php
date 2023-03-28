<?php
 //model 2
 //$age = array("Petter"=>"35", "Ben"=>"37", "Joe"=>"43");

 $age ["AGUS"] = "35";
 $age ["AGNES"] = "65";
 $age ["JARJIT"] = "30";
 $age ["MEIMEI"] = "25";
 $age ["KAKROS"] = "35";
 $age ["UPIN"] = "17";
 $age ["IPIN"] = "16";

 header("Content-Type: application/json");
 echo json_encode($age);