<?php
    include 'login.php';
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
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
    
    <h3>INSIRA ID DA DISCIPLINA DESEJADA:</h3>

    <form action="EXIBE_DISCIPLINA.php" method="post">
        
        <fieldset>
            
            <label for="IdDisciplina">Id da Disciplina</label><br>
            <input type="text" name="IdDisciplina"><br>

            <input type="submit" value="EXIBA">

        </fieldset>
    </form>
    <?php
    }elseif ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $indisciplina   = $_POST["IdDisciplina"];
               
        $conn= new mysqli($servidor, $usuario, $senha, $bancodedados);
        $sql ="SELECT * FROM `Disciplina` WHERE `IdDisciplina`= '$indisciplina'";
        $Index=$conn->query($sql);
        $elemento = $Index->fetch_assoc();
        echo " Nome: " . $elemento["Nome"];
        echo " Periodo: " . $elemento["Periodo"];
        echo " Id Pre-Requisito: " . $elemento["IdPreRequisito"];
        echo " Creditos: " . $elemento["Creditos"];
    }
        
    ?>

    <a href="MENU_PRINCIPAL.php">Volte ao menu</a>
    

</body>
</html>