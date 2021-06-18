<?php
include_once "task.php";
class Controler
{
    function SavaTask($title, $description, $date)
    {
        $task = new Task();
        $task->SavaTask($title, $description, $date);
        $this->exito("The task was saved successfully");
    }
    function GetTasks(){
        $task= new Task();
        $result=$task->GetTask();
        $this->printJSON(["data"=>$result]);

    }
    function error($mensaje)
    {
        echo json_encode(["mensaje" => $mensaje]);
    }

    function exito($mensaje)
    {
        echo json_encode(["mensaje" => $mensaje]);
    }

    function printJSON($array)
    {
      echo json_encode($array);
    }
}

?>
