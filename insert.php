<?php
include_once 'controler.php';
$task=new Controler();
if (isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST['date']) ){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $date=$_POST['date'];
    $task->SavaTask($title,$description,$date);
    header('Location:  172.17.0.2/FullStackApplication/');
}else{
$task->error('Error !!');
}
?>
