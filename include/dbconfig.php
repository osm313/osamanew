<?php
session_start();

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
  //Username, Password and Database
  $con = new mysqli("localhost", "abhrfrtgcqdozn", "b09b92a24144dd0eb1fc0993795745664b077a322388ce21cd98ce185718a074", "d4ao6u9s6amfge");
  $con->set_charset("utf8mb4");
} catch(Exception $e) {
  error_log($e->getMessage());
  //Should be a message a typical user could understand
}
$fset = $con->query("select * from setting")->fetch_assoc();
$fetch_main = $con->query("select * from main_setting")->fetch_assoc();

date_default_timezone_set($fset['timezone']);
$dirname = dirname( dirname(__FILE__) ).'/api';


?>

