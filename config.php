<?php
define('DBSERVER','localhost');
define('DBUSERNAME','root');
define('DBPASSWORD','9449689659');
define('DBNAME','new_schema');

$db=mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

if($db===false){
    die("Error:connection error".mysqli_connect_error());
}
?>