<?php
include "./petShop/index.php";
$servername = "localhost";
$database = "petshop";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Erro na conexão com o banco de dados" . mysqli_connect_error());
}

$id = $_GET["id"];

$sql = "DELETE FROM `pet_shop` WHERE `pet_shop`.`id` = $id;";

if (mysqli_query($con, $sql)) {
    echo "removid com sucesso";
} else {
    echo "Erro ao remover do banco de dados.";
}
echo "<a href='./petShop/index.php'>Voltar para lista</a>";

mysqli_close($con);
