<?php
include_once "task.php";
class Controler
{
    function SavaTask($title, $description, $date)
    {
        $task = new Task();
        $task->SavaTask($title, $description, $date);
    
    }
      function GetTasks()    
    {                              
        $task = new Task();        
        $result = $task->GetTask();     
        foreach ($result as $document) {
                echo '<tr>';            
                echo '<td>';            
                echo $document["title"];      
                echo '</td>';                 
                echo '<td>';                  
                echo $document["description"];
                                          
                echo '</td>';             
                echo '<td>';              
                echo    $document["date"];
                             
                echo '</td>';                                
                echo '<td>';                                 
                echo '                                           
<button type="button" class="btn btn-success">Update</button>    
<br>                                                             
<a href="172.17.0.2/FullStackApplication/DeleteTask.php?title='.$document['title'].'" type="button" class="btn btn-danger mt-3">Delete</a>
';                           
                echo '</td>';
                             
                echo '</tr>';
         
                      
        }
     
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
