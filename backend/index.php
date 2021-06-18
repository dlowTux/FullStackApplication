<?php require 'vendor/autoload.php';
    echo phpinfo();
    echo "xd";
    try {
        $client = new MongoDB\Client('');
        $db = $client->databasename;
        $collection = $db->collection_name;
                $document = $collection->find();
        foreach ($document as $item) {
            echo $item['name'] . '</br>';
        }
        echo "final";
            } catch (PDOException $e) {
        echo "Error connection: " . $e->getMessage();
    }

    
?>
