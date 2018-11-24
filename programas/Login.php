<!DOCTYPE html>
<html lang="pt-br">

<head>



    <meta charset="UTF-8">
    <title> Estudo Tela Login </title>

</head>

<body>

<?php


session_start();
$usuario = '';
$senha = '';

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
}
if (isset($_SESSION['senha'])) {
    $senha = $_SESSION['senha'];
}

if (isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['cadastro'])) {
        $_SESSION['usuario'] = $_POST['login'];
        $_SESSION['senha'] = $_POST['senha'];
    } elseif (isset($_POST['login']) && isset($_POST['senha']) && $usuario ) {
        if ($_POST['login'] == $usuario && $_POST['senha'] == $senha) {
            echo 'Funciona';
        } else {
            echo 'Não funciona';
        }
    }

?>

    <form style="text-align:center" method='post'>
        <input type='text' name='login'/> </br>
        <input type='text' name='senha'/> </br>
        <input type='submit' name='Cadastrar'/> </br>
        <input type='hidden' name='cadastro' value="1" />
</form>

    <form style="text-align:center" method='post'>
        <input type='text' name='login'/> </br>
        <input type='text' name='senha'/> </br>
        <input type='submit' name='Logar'/>
    </form>
</body>

</html>