<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title> Ambiente Para estudo </title>

</head>

<body>

<?php

if (isset($_POST['dependentes'])) {
    $dependentes = $_POST['dependentes'];
    $count = 0;

    echo"
    <table border='1'>
    <tr>
    <th></th>
    <th>Nome</th>
    <th>Nascimento</th>
    </tr>
    <tr>
    <td>Titular</td>
    <td><input type='text' name='nome'/></td>
    <td><input type='text' name='nasc'/></td>
    <tr>
    ";
    do {
        $count = $count + 1;

        echo "
        <tr>
        <td>Dependentes $count</td>
        <td><input type='text' name='nome'></td>
        <td><input type='text' name='nasc'></td>
        </tr>
        ";

    } while ($count<$dependentes);
}

?>
    <p>Digite o número de dependentes.</p>
    <form method="POST">
        <input type="text" name="dependentes" />
        <input type="submit" />
    </form>

</body>

</html>