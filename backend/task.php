<?php
include_once "database.php";
class Task extends DB
{
    function SavaTask($title, $description, $date)
    {
        $document = [
            "title" => $title,
            "description" => $description,
            "date" => $date,
        ];

        $this->connect()->insertOne($document);
    }
    function GetTask()
    {
        return $this->connect()->find();
    }
}
?>
