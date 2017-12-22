<?php
//require 'potato.model.php';
//require 'potato.route.php';
require 'model.student.php';
/*
$dt = new DateTime();
*/
//echo $dt->format('Y-m-d H:i:s');// get current date

$s = Student_profile::getInstance();
#$res = $s->find("province:a",'array');
//print_r($res);

/*
$s->setId("2014254823");
$s->setSex("MALE");
$s->setElem_grad("1997"); //sample year format
$s->setBirthdate("2017-03-05"); //sample date format
$s->setCreated_date($dt->format('Y-m-d H:i:s')); //sample inser datetime now
$res = $s->find("id:2014254823",'array');
print_r($res);
*/

//$m = new PotatoModel("student_profile");
//Route::get('sample','id=1:name=2:sample=5');
?>