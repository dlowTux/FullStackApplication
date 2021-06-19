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
        $tabla = "";
        foreach ($result as $document) {
            $tabla += '<tr>
                <td>'.$document["title"].'</td>
                <td>'.$document["description"].'</td>
                <td>'.$document["date"].'</td>
            <tr>';
            /*        $info = [
                "id" => $document["_id"],
                "title" => $document["title"],
                "description" => $document["description"],
                "date" => $document["date"],
    ];*/
        }
        return $tabla;
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
