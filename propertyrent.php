<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

$uid = $_SESSION['uid'];
$propertyid = $_POST['propertyId'];
$floor = $_POST['rentFloor'];
$query = "SELECT * FROM rentfloor WHERE uid = $uid AND pid = $propertyid";
$result = $con ->query($query);
if ($result && $result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $current_floor = $row['floor'];
    // Modify the current "floor" value by appending the new value
    $updated_floor = $current_floor . "," . $floor;

    // Update the "floor" column with the modified value
    $update_query = "UPDATE rentfloor SET floor = '$updated_floor' WHERE uid = $uid AND pid = $propertyid";
    $result = $con->query($update_query);
    if($result){
        header("Location:propertydetail.php?pid=$propertyid");
    }
}
else{
    $sql = "INSERT INTO rentfloor (uid, pid, floor) VALUES ('$uid', '$propertyid', '$floor')";
    $result = $con->query($sql);
    if($result){
        header("Location:propertydetail.php?pid=$propertyid");
    }
}
?>