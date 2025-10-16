<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE id=$id";
$result = $conn->query($sql);
$cliente = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Cliente</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">

<h2>Editar Cliente</h2>
<form action="salvar.php" method="POST">
  <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
  <!-- Repita os mesmos campos do cadastrar.php preenchendo com os valores -->
  <div class="row">
    <div class="col-md-6 mb-3">
      <label>Nome</label>
      <input type="text" name="nome" value="<?= $cliente['nome'] ?>" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
      <label>CPF</label>
      <input type="text" name="cpf" value="<?= $cliente['cpf'] ?>" class="form-control">
    </div>
    <!-- ... demais campos -->
  </div>
  <button type="submit" class="btn btn-success">Salvar Alterações</button>
  <a href="index.php" class="btn btn-secondary">Voltar</a>
</form>

</body>
</html>
