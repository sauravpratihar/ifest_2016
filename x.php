<?php 
include('crud.php');

$crud = new crud();

$events = $crud->events("i.Biz");
 
// print_r($events);
// 
echo $events[0]['title'];
// 
?>