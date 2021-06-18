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

        $query = $this->connect()->insertOne($document);
    }
}
?>
