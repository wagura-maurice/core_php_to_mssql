<?php
$serverName = "173.212.247.73,1433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"HR", "UID"=>"sa", "PWD"=>"Fvo><ItPhKc0mu06wfYH");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if($conn) {
     echo "Connection established.<br />";
} else {
     echo "Connection could not be established.<br />";
     die(print_r(sqlsrv_errors(), true));
}
?>
