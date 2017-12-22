<?php
require_once 'model.student.profile.php';

$student = Student_profile::getInstance();
$student->release();
$student->setStreet("sa tabi lang ng bahay niyo");
echo $student->update("STUDENT_id:2014141384");

//insert new student
/*
$student->release(); //always use this to clear contents
$student->setId("5");
$student->setMobile("09368955866");
$student->setCity("malolos");
echo $student->insert();

//retrieve
$student->release();
$student->find("id:3",'self');
echo $student->getCity();
echo $student->getMobile();

//meron ding update nasa code nga lang


//sample formats
$dt = new DateTime();
//echo $dt->format('Y-m-d H:i:s');// get current date

$s = Student_profile::getInstance();
#$res = $s->find("province:a",'array');
//print_r($res);

$s->setId("2014254823");
$s->setSex("MALE");
$s->setElem_grad("1997"); //sample year format
$s->setBirthdate("2017-03-05"); //sample date format
$s->setCreated_date($dt->format('Y-m-d H:i:s')); //sample inser datetime now
$res = $s->find("id:2014254823",'array');
print_r($res);
*/


?>