<?php
// Listagem com erro de lógica (ordem incorreta e falta de conexão)
include("conexao.php");

$sql = "SELECT * FROM usuarios"; // Erro de SQL: FORM ao invés de FROM
$resultado = mysqli_query($conn, $sql);

echo "<h1>Lista de Usuários</h1>";

if ($resultado->num_rows > 0) {
    echo "<a href='editar.php?id={$linha['nome']}'>Editar<a>
          <a href='excluir.php?id={$linha['email']}'>Excluir<a>";

    while ($linha = mysqli_fetch_array($resultado)) {
        echo "Nome: " . $linha['nome'] . "<br>";
        echo "Email: " . $linha['email'] . "<br><br>";
    }
} else {
    echo "Nenhum registro encontrado";
}


?>
<a href='cadastrar.php'>Cadastrar novo</a>
