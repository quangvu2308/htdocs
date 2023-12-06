<?php 
   include ('pdo.php');


   include ('./view/header.php'); 
//    function pdo_query($sql){
//       $sql_args = array_slice(func_get_args(), 1);
//       try{
//           $conn = pdo_get_connection();
//           $stmt = $conn->prepare($sql);
//           $stmt->execute($sql_args);
//           $rows = $stmt->fetchAll();
//           return $rows;
//       }
//       catch(PDOException $e){
//           throw $e;
//       }
//       finally{
//           unset($conn);
//       }
//   }

   $sql="SELECT products.productName, products.price, products.description, categories.categoryName
   FROM products
   JOIN categories ON products.category_id = categories.category_id;
   ";
   $listProducts = pdo_query($sql);
   




   include ('./view/adminview.php');?>

<?php include ('./view/fooster.php');?>