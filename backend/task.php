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
    function DeletTask($id)
    {
        $this->connect()->deleteOne(["_id" => $id]);
    }
    function Update($id, $data)
    {
        $this->connect()->updateMany(["_id" => $id], ['$set' => $data]);
    }
}
?>
