<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
<link href="main.css" rel="stylesheet" />
</head>
<body>
 <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top" />
                To Do List
            </a>
        </div>
    </nav>
<div class="container">
    <div class="row">
<div class="col"></div>
<div class="col">
<?php
$title = $_GET["title"];
$description = $_GET["description"];
$date = $_GET["date"];
echo ' <form method="POST", action="UpdateTask.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                      <input name="txttitle" type="text" class="form-control" value="'.$title.'"/>
<input name="oldtitle" type="text" class="form-control" hidden value="'.$title.'"/>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <input type="text" class="form-control" name="txtdescription" value="'.$description.'"/>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Date</label>
                        <input type="date" class="form-control" name="txtdate" value="'.$date.'"/>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Submit" name="btnSubmit" />
                </form>'
?>

</div>
<div class="col"></div>
</div>
</div>

</body>
</html>
<?php

include_once 'controler.php';
$task=new Controler();
if(isset($_POST["btnSubmit"])){
$title=$_POST['oldtitle'];
    $ntitle=$_POST['txttitle'];
    $description=$_POST['txtdescription'];
    $date=$_POST['txtdate'];
    $data=array(
        'title'=>$ntitle,
        'description'=>$description,
        'date'=>$date
    );
    $task->Update($title,$data);
        header('Location: http://172.17.0.2/FullStackApplication/');


}



?>

