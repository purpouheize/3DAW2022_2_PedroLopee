<?php
    
    include 'login.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $nome  = $_POST["Nome"];
            $indisciplina   = $_POST["IdDisciplina"];
            $periodu = $_POST["Periodo"];
            $iprerequisitado = $_POST["IdPreRequisito"];
            $credito = $_POST["Creditos"];

            $conn  = new mysqli($servidor, $usuario, $senha, $bancodedados);

            if($conn ->connect_error)
            {
                die("Conexao com banco de dados falhou.");
            }
            
            $sql    = "INSERT INTO `Disciplina`(`Nome`, `IdDisciplina`, `Periodo`, `IdPreRequisito`,`Creditos`) VALUES (NULL, '$nome', '$indisciplina', '$periodu', '$iprerequisitado','$credito')";
            
            $result = $conn->query($sql);
            echo "result?: ". $result;
        }
    else
        {
            $nome = "";
            $mat  = "";
        }
        echo "Disciplina Inserida com sucesso";
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
    <h3>Cadastre sua disciplina \/</h3>

    <form action="CRIA_DISCIPLINA.php" method="post">
        
        <fieldset>
            <label for="Nome">Nome da Disciplina</label><br>
            <input type="text" name="nome"><br>

            <label for="IdDisciplina">Id da Disciplina</label><br>
            <input type="text" name="IdDisciplina"><br>

            <label for="Periodo">Periodo</label><br>
            <input type="text" name="Periodo"><br>
            
            <label for="IdPreRequisito">Id do Pre Requisito</label><br>
            <input type="text" name="IdPreRequisito"><br>
            
            <label for="Creditos">Creditos</label><br>
            <input type="text" name="Creditos"><br>
            
            <input type="submit" value="CRIE">

        </fieldset>
    </form>

    <a href="MENU_PRINCIPAL.php">Voltar ao menu</a>
</body>
</html>