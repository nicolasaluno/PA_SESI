<?php

$nome = trim($_POST["nome"]);
$idade = trim($_POST["idade"]);
$email = trim($_POST["email"]);
$curso = trim($_POST["curso"]);

if(empty($nome) || empty($idade) || empty($email) || empty($curso)){
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Erro</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<div class="conteudo">

<h2>❌ Erro</h2>

<p>Todos os campos são obrigatórios.</p>

<a href="index.php" class="botao">Voltar</a>

</div>

</div>

</body>
</html>

<?php
exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro Realizado</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<div class="topo">
Sistema de Cadastro de Alunos
</div>

<div class="conteudo">

<div class="sucesso">
✔
</div>

<h2>Aluno cadastrado com sucesso!</h2>

<table>

<tr>
<td><strong>Nome</strong></td>
<td><?php echo $nome; ?></td>
</tr>

<tr>
<td><strong>Idade</strong></td>
<td><?php echo $idade; ?></td>
</tr>

<tr>
<td><strong>E-mail</strong></td>
<td><?php echo $email; ?></td>
</tr>

<tr>
<td><strong>Curso</strong></td>
<td><?php echo $curso; ?></td>
</tr>

</table>

<a href="index.php" class="botao">
Voltar
</a>

</div>

</div>

</body>
</html>