<?php
include "con_pdo.php";
try {
    $sql="
    create table usuario(
    id int not null primary key auto_increment,
    login varchar(30) not null,
    senha varchar(255) not null,
    email varchar(150) not null,
    data date,
    obs varchar(200),
    UNIQUE (email)
    )ENGINE= InnoDB;
    ";
    $conn->exec($sql);
    echo "Tabela Criada!";
} 
catch(PDOException $e) {
    echo  "<br>" . $e->getMessage();
}
$conn = null;
?>