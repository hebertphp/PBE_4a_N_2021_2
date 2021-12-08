<?php
include "conecta.php";
echo "<br>";
$sql="select login, email, DATE_FORMAT(data,'%d/%m/%Y') as data from usuario";
$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));

while($row=  mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo $row["login"]." - ".$row["email"]." - ".$row["data"]."<br>";
}
mysqli_free_result($result);

mysqli_close($conn);
?>
