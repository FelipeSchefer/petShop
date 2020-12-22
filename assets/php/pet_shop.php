<?php
// include "index.html";
$servername = "localhost";
$database = "petshop";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Erro na conexão com o banco de dados" . mysqli_connect_error());
}

if (isset($_GET['metodo'])) {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $avenida = $_POST['avenida'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $servicos = $_POST['servicos'];
    $brinquedos = $_POST['brinquedos'];
    $concordaComCompra = $_POST['concordaComCompra'];

    $sql = "INSERT INTO pet_shop (nome, sobrenome,email,senha,avenida,cidade,estado,cep,servicos,brinquedos,concordaComCompra) VALUES ('$nome', '$sobrenome','$email','$senha','$avenida','$cidade','$estado','$cep','$servicos','$brinquedos','$concordaComCompra');";

    if (mysqli_query($con, $sql)) {
        echo "Pedido de pet shop feito com sucesso";
    } else {
        echo "Falha ao pedir a pet shop ao banco de dados.";
    }
}

$sqlListagem = "SELECT * FROM pet_shop";

$query = mysqli_query($con, $sqlListagem);

echo "<table border=1>";
while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["nome"] . "</td>";
    echo "<td>" . $row["sobrenome"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["cidade"] . "</td>";
    echo "<td>" . $row["estado"] . "</td>";
    echo "<td>" . $row["cep"] . "</td>";
    echo "<td>" . $row["servicos"] . "</td>";
    echo "<td>" . $row["brinquedos"] . "</td>";
    echo "<td>" . $row["concordaComCompra"] . "</td>";

    echo "<td><a href=remove.php?id=" . $row["id"] . ">remover</a></td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
