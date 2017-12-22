<?php
require 'staff.php';
require 'potato.route.php';

$p = Staff::getInstance();
$p->release();
$res = $p->where('name','=','Elyssa Jelyn C Pnaget');
print_r($res[0]['name']);
//echo $p->update("pkg_trackno:17");
//echo $p->insert();

/*
require 'potato.connection.php';

$con = PotatoConnection::getInstance();
$result = $con->query("show columns from tbl_staff");
while($row = $result->fetch_assoc()){
	echo($row['Type'])."<br>";
	
}
*/
//Route::get('index');
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
print $actual_link;

?>