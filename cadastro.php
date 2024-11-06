<?php
session_start();
if (!isset($_SESSION['alunos'])) {
    $_SESSION['alunos'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aluno = [
        'nome' => $_POST['nome'],
        'ra' => $_POST['ra'],
        'sexo' => $_POST['sexo'],
        'idade' => $_POST['idade'],
        'endereco' => $_POST['endereco'],
        'telefone' => $_POST['telefone'],
        'email' => $_POST['email'],
    ];
    $_SESSION['alunos'][] = $aluno;
    echo "<p>Aluno cadastrado com sucesso!</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="index.php">Voltar ao Menu</a>
    <h1>Cadastrar Aluno</h1>
    <form method="POST" action="cadastro.php">
        Nome: <input type="text" name="nome" required><br>
        RA: <input type="text" name="ra" required><br>
        Sexo: 
        <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select><br>
        Idade: <input type="number" name="idade" required><br>
        Endereço: <input type="text" name="endereco" required><br>
        Telefone: <input type="text" name="telefone" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
