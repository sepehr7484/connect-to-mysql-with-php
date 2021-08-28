<?php
try {
    $connection=new PDO("mysql:host=localhost;dbname=flutter1;charset=utf8","root","");

       // echo "succses connect";

}catch (PDOException $e){
    echo "Dont succses connect";
}

$new_product =$connection->prepare("SELECT * FROM product");
$new_product ->execute();
$new_product=$new_product->fetchAll(PDO::FETCH_ASSOC);
echo  json_encode($new_product);
?>