<?php
include_once "task.php";
class Controler
{
    function SavaTask($title, $description, $date)
    {
        $task = new Task();
        $task->SavaTask($title, $description, $date);
        return $this->exito("The task was saved successfully");
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
       return $this->printJSON($arreglo);
    }
    function DeleteTask($title)
    {
        $task = new Task();
        $task->DeletTask($title);
        return $this->exito("Task delete");
    }
    function Update($title, $data)
    {
        $task = new Task();
        $task->Update($title, $data);
        return $this->exito("Task update");
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
