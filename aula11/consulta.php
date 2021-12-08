<?php
include "conecta.php";
$sql="select login, email, data from usuario";
$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));

$row=  mysqli_fetch_array($result, MYSQLI_ASSOC);

echo "<pre>";print_r($row);echo "</pre>";

$row=  mysqli_fetch_array($result, MYSQLI_ASSOC);

echo "<pre>";print_r($row);echo "</pre>";


mysqli_free_result($result);


mysqli_close($conn);
?>