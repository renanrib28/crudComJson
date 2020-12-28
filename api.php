<?php
include('assets/functions/connection.php');
 header('Content-Type: application/json;charset=utf-8'); 
 $limit1= isset($_GET['paginationinit']) && !empty($_GET['paginationinit']) ? intval($_GET['paginationinit']): 0;
 $limit2= isset($_GET['paginationend']) && !empty($_GET['paginationend']) ? intval($_GET['paginationend']) : 0;
 $tipo=isset($_GET['tipobusca']) && !empty($_GET['tipobusca']) ? intval($_GET['tipobusca']) : 0;
if($limit2==0){
  $tipo=0;
}
 if($tipo==1){
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
      if(isset($row_array) && !empty($row_array)){
      echo json_encode($row_array, JSON_UNESCAPED_UNICODE);
      }
  }
  mysqli_close($conn);
}elseif($tipo==2){
  $sql="select * from (SELECT idProduto,c.nome as categoria,t.nome,t.descricao,t.valor,t.estoque,
                               @rownum := @rownum + 1 as idind
                          FROM produtos t INNER JOIN categorias c on c.idCategoria=t.idCategoria, 
                               (SELECT @rownum := 0) r
                               
                               ) as categ ORDER BY idind desc limit ".$limit1.",".$limit2."";
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
      if(isset($row_array) && !empty($row_array)){
      echo json_encode($row_array, JSON_UNESCAPED_UNICODE);
      }
      
  }
  mysqli_close($conn);
}elseif($tipo==3){
  $sql="SELECT idCliente,nome,cpfcnpj FROM clientes ORDER BY nome asc limit ".$limit1.",".$limit2."";
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
}else{
  echo "Erro nos parâmetros";
}
?>