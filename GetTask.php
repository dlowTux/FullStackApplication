<?php
include_once 'controler.php';
$task=new Controler();
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo $task->GetTasks();
exit();
?>

