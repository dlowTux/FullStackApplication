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
    function error($mensaje)
    {
        return json_encode(["mensaje" => $mensaje]);
    }

    function exito($mensaje)
    {
        return json_encode(["mensaje" => $mensaje]);
    }

    function printJSON($array)
    {
        return json_encode($array);
    }
}

?>
