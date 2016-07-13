
<?php
$connection = mysql_connect('localhost', 'root', 'vid1995');
//if (!$connection){
//    die("Database Connection Failed" . mysql_error());
//}
error_reporting(E_ALL ^ E_DEPRECATED);
$select_db = mysql_select_db('details');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

