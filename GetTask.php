<?php
include_once 'controler.php';
$task=new Controler();
header('Content-Type: application/json');
echo $task->GetTasks();
exit();
?>
