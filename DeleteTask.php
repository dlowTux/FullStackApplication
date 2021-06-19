<?php
include_once "controler.php";
$task = new Controler();
if (isset($_GET["title"])) {
    $title = $_GET["title"];
    $task->DeleteTask($title);
    header('Location: http://172.17.0.2/FullStackApplication/');
} else {
    $task->error("Error");
}

?>
