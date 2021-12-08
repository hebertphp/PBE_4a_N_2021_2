<?php
include "conecta.php";
$sql="
insert into usuario values (null, 'hba1',md5('123456'),'hba1@test.com',now(),'Funcionou?')
";
$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "Insert OK!";
mysqli_close($conn);
?>
