<?php
include_once "controler.php";
$task = new Controler();
if (isset($_GET["title"])) {
    $title = $_GET["title"];
    $task->DeleteTask($title);
} else {
    $task->error("Error");
}

?>
