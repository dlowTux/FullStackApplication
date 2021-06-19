<?php
include_once 'controler.php';
$task=new Controler();
if (isset($_GET['oldtitle']) && isset($_GET["title"]) && isset($_GET["description"]) && isset($_GET['date']) ){
    $title=$_GET['title'];
    $description=$_GET['description'];
    $date=$_GET['date'];
    $oldtitle=$_GET['oldtitle'];
    $data=array(
        'title'=>$title,
        'description'=>$description,
        'date'=>$date
    );
    $task->Update($oldtitle,$data);

}else{
$task->error('Error !!');
}
?>
