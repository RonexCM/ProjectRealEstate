<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

$uid = $_SESSION['uid'];
$propertyid = $_POST['pid'];
$type = $_POST['type'];
$price = $_POST['price'];

$query = "INSERT INTO sales (uid, pid, type, price) VALUES ('$uid','$propertyid','$type','$price')";
$result = $con->query($query);

if($result){
    $queryUpdate = "UPDATE property SET status = 'sold out' WHERE pid = $propertyid";//Only updates if the insertion of the data in sales table is complete
    $resultUpdate = $con->query($queryUpdate);//The insertion will only be completed if a user buys a sales 
    if($resultUpdate){
        header("Location:index.php?pid=$propertyid");
    }
}
else {
    echo "Error updating record: " . $con->error;
}
?>