<?php
    include 'config.php';

    include "header.php";

    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetchAll();
            return $rows;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    $sql="select * from task order by task_id desc";
    $listTodo = pdo_query($sql);
    
    include "dailytask.php";


    include "footer.php";
?>