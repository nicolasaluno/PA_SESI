<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Alunos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <div class="topo">
        Sistema de Cadastro de Alunos
    </div>

    <div class="conteudo">

        <h2>Novo Aluno</h2>

        <form action="resultado.php" method="POST">

            <label>Nome Completo</label>
            <input type="text" name="nome">

            <label>Idade</label>
            <input type="number" name="idade">

            <label>E-mail</label>
            <input type="email" name="email">

            <label>Curso</label>

            <select name="curso">
                <option value="">Selecione um curso</option>
                <option>Informática</option>
                <option>Administração</option>
                <option>Logística</option>
                <option>Automação</option>
                <option>Mecatrônica</option>
            </select>

            <button type="submit">
                Cadastrar
            </button>

        </form>

    </div>

</div>

</body>
</html>