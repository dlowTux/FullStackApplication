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
    function GetTasks()
    {
        $task = new Task();
        $result = $task->GetTask();
        $arreglo = [];
        $arreglo["tasks"] = [];
        foreach ($result as $document) {
            $info = [
                "id" => $document["_id"],
                "title" => $document["title"],
                "description" => $document["description"],
                "date" => $document["date"],
            ];
            array_push($arreglo["tasks"], $info);
        }
        $this->printJSON($arreglo);
    }
    function DeleteTask($title)
    {
        $task = new Task();
        $task->DeletTask($title);
        echo $this->exito("Task delete");
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
