<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title> Ambiente Para estudo </title>

</head>

<body>

    <?php
        session_start();
        if (!isset($_SESSION['Teste'])) {
            $_SESSION['Teste'] = [];
        }

        if (isset($_POST["Var1"])) {
            $_SESSION['Teste'][] = $_POST["Var1"];
        }

        foreach ($_SESSION['Teste'] as $valor) {
            echo $valor.'<br>';
        }

    ?>

    <form method="POST">
        <input type="text" name="Var1" />
        <input type="submit" />
    </form>

</body>

</html>