<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Cliente</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">

<h2>Cadastrar Cliente</h2>
<form action="salvar.php" method="POST">
  <div class="row">
    <div class="col-md-6 mb-3">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="col-md-6 mb-3">
      <label>CPF</label>
      <input type="text" name="cpf" class="form-control" required>
    </div>
    <div class="col-md-6 mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
      <label>Senha</label>
      <input type="password" name="senha" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
      <label>Data de Nascimento</label>
      <input type="date" name="data_nasc" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
      <label>Telefone</label>
      <input type="text" name="telefone" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
      <label>Endereço</label>
      <input type="text" name="endereco" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
      <label>Cidade</label>
      <input type="text" name="cidade" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
      <label>Estado Civil</label>
      <input type="text" name="estado_civil" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
      <label>Profissão</label>
      <input type="text" name="profissao" class="form-control">
    </div>
    <div class="col-md-12 mb-3">
      <label>Observação</label>
      <textarea name="observacao" class="form-control"></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Salvar</button>
  <a href="index.php" class="btn btn-secondary">Voltar</a>
</form>

</body>
</html>
