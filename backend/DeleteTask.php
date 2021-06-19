<?php
include_once "controler.php";
$task = new Controler();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $task->DeleteTask($id);
} else {
    $task->error("Error");
}

?>
