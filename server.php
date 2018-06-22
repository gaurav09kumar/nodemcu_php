<?php
include('connection.php');

$name = $_GET['name'];

$spl="INSERT INTO tb(name)VALUES(:name)";

$stmt = $PDO->prepare($spl);

$stmt->bindParam(':name',$name);


if($stmt->execute()){
    echo"SUCCESS";
}
else {
    echo "cannot send data";
}
?>