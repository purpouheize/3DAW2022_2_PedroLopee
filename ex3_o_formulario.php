<?php
    $mat = ""
    $nome = ""
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $mat = $_POST["matri"];
        $nome = $_POST["nomi"];
    }

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>Inscrição de matricula<h3>
    <form action="ex3_o_formulario.php" method="POST">
        Insira sua matricula: <input type="text" name="matri">
        <br>
        Insira o seu nome: <input type="text" name="nomi">
        <br>
        <input type="submit" value="enviar">
        <br>
        <br>
        <?php echo "Sua matricula é   " . $matricula ?>
        <br>
        <?php echo "Seu nome é   " . $nome ?>
        <br>
    </form>
</body>
</html>