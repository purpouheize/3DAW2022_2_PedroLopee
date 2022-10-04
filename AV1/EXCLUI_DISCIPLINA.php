<?php
    
    include 'login.php';

    if($_SERVER["REQUEST_METHOD"] == "GET")
        {
        ?>

<!DOCTYPE html>

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
    <header>
    <h4>Escolha a tal disciplina a ser deletada</h4>
    </header>

    <form action="EXCLUI_DISCIPLINA.php" method="POST">
        
        <fieldset>

            <label for="IdDisciplina">Id da disciplina</label><br>
            <input type="text" name="IdDisciplina"><br>
        
            <input type="submit" value="DELETE">

        </fieldset>
    </form>

    <a href="MENU_PRINCIPAL.php">Voltar ao menu</a>
    

</body>
<?php
} elseif($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $indisciplina = $_POST["matricula"];
        

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        $sql  = "DELETE FROM `Disciplina` WHERE `IdDisciplina`= '$indisciplina'";
        
        $result=$conn->query($sql);
        echo $sql;
        echo $result;
    }
?>