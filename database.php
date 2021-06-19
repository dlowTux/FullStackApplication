<?php
require "vendor/autoload.php";
class DB
{
    function connect()
    {
        try {
            $client = new MongoDB\Client("");
            $db = $client->databasename;
            return $collection = $db->collection_name;
        } catch (PDOException $e) {
            echo "Error connection: " . $e->getMessage();
        }
    }
}

?>
