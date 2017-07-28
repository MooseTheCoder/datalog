<?php

date_default_timezone_set("Europe/London");

function datalog($info){
  $logtime = Date("d/m/y|G:i:s");
  $log = $logtime . "|||" . $_SERVER['REMOTE_ADDR']."|||" . $info.PHP_EOL;           
  file_put_contents("../datalog/datalog",$log,FILE_APPEND);
}
