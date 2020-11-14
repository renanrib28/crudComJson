<?php
include('assets/functions/connection.php');
 header('Content-Type: application/json;charset=utf-8'); 
 $limit1= intval($_GET['paginationinit']);
 $limit2= intval($_GET['paginationend']);

$sql="select * from (SELECT t.*, 
                               @rownum := @rownum + 1 as idind
                          FROM categorias t, 
                               (SELECT @rownum := 0) r) as categ limit ".$limit1.",".$limit2."";
//$result = mysqli_query($conn, $sql);
if ($result = mysqli_query($conn, $sql))
   {

    while($row = $result->fetch_object())
    {
        foreach($row as $key => $col){
           $col_array[$key] = $col;
        }
        $row_array[] =  $col_array;

    }
    echo json_encode($row_array, JSON_UNESCAPED_UNICODE);
    
}
mysqli_close($conn);

?>