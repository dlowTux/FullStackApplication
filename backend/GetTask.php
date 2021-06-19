<?php
include_once 'controler.php';
$task=new Controler();
$task->GetTasks();
header("HTTP/1.1 200 OK");
exit();
?>
