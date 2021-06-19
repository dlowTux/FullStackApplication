


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>TODO List</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
<link href="main.css" rel="stylesheet" />

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top" />
                To Do List
            </a>
        </div>
    </nav>
    <br />
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST", action="insert.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input name="txttitle" type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <input type="text" class="form-control" name="txtdescription" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Date</label>
                        <input type="date" class="form-control" name="txtdate" />
                    </div>

                    <input type="submit" class="btn btn-primary" value="Submit" name='btnSubmit' />
                </form>
            </div>
            <div class="col">
                <div id="mensajes" class="mensajes">
<?php
if(isset($_POST['btnSubmit'])){
include_once 'controler.php';
$task=new Controler();
if (isset($_POST["txttitle"]) && isset($_POST["txtdescription"]) && isset($_POST['txtdate']) ){
    $title=$_POST['txttitle'];
    $description=$_POST['txtdescription'];
    $date=$_POST['txtdate'];
    $task->SavaTask($title,$description,$date);
    echo '<div class="alert alert-success" role="alert">
    The task was saved successfully
    </div>';
}else{
    echo '<div class="alert alert-danger" role="alert">
    Error task was not saved
    </div>';
}
?>
</div>
            </div>
        </div>
        <br />
        <table class="table">

            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="table">
<?php 
include_once 'GetTask.php'

?>
</tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>
