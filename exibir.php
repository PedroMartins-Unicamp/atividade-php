<?php
session_start();
$alunos = $_SESSION['alunos'] ?? [];
usort($alunos, function ($a, $b) {
    return $a['ra'] <=> $b['ra'];
});
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exibir Alunos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="index.php">Voltar ao Menu</a>
    <h1>Lista de Alunos Cadastrados</h1>
    <?php if (count($alunos) > 0): ?>
        <table>
            <tr>
                <th>RA</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Idade</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
            <?php foreach ($alunos as $aluno): ?>
                <tr>
                    <td><?= htmlspecialchars($aluno['ra']) ?></td>
                    <td><?= htmlspecialchars($aluno['nome']) ?></td>
                    <td><?= htmlspecialchars($aluno['sexo']) ?></td>
                    <td><?= htmlspecialchars($aluno['idade']) ?></td>
                    <td><?= htmlspecialchars($aluno['endereco']) ?></td>
                    <td><?= htmlspecialchars($aluno['telefone']) ?></td>
                    <td><?= htmlspecialchars($aluno['email']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum aluno cadastrado ainda.</p>
    <?php endif; ?>
</body>
</html>
