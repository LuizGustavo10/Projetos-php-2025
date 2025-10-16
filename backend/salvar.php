<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$data_nasc = $_POST['data_nasc'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado_civil = $_POST['estado_civil'];
$profissao = $_POST['profissao'];
$observacao = $_POST['observacao'];

if (isset($_POST['id'])) {
    // Atualiza
    $id = $_POST['id'];
    $sql = "UPDATE cliente SET 
        nome='$nome', cpf='$cpf', email='$email', data_nasc='$data_nasc',
        telefone='$telefone', endereco='$endereco', cidade='$cidade',
        estado_civil='$estado_civil', profissao='$profissao', observacao='$observacao'
        WHERE id=$id";
} else {
    // Cadastra novo
    $sql = "INSERT INTO cliente (nome, cpf, email, senha, data_nasc, telefone, endereco, cidade, estado_civil, profissao, observacao)
        VALUES ('$nome','$cpf','$email','$senha','$data_nasc','$telefone','$endereco','$cidade','$estado_civil','$profissao','$observacao')";

}


if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro: " . $conn->error;
}
?>
