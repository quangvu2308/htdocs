<?php
    include 'config.php';

    include 'header.php';

    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    include 'add.php';

    if(isset($_POST['themmoi'])&&($_POST['themmoi'])) {
        $taskName=$_POST['taskName'];
        $day=$_POST['day'];
        $tag=$_POST['tag'];
        $priority=$_POST['priority'];
        $note=$_POST['note'];

        $sql="insert into task(task_name, day, tags, priority, notes) values('$taskName', '$day', '$tag', '$priority', '$note' )";
        pdo_execute($sql);
        $thongbao="Thêm thành công";
    }

    

    include 'footer.php';


?>