<?php
include_once 'controler.php';
$task=new Controler();
if (isset($_GET["title"]) && isset($_GET["description"]) && isset($_GET['date']) ){
    $title=$_GET['title'];
    $description=$_GET['description'];
    $date=$_GET['date'];
    $task->SavaTask($title,$description,$date);
}
?>
