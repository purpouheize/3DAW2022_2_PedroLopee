<?php

    include 'login.php';
    $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
    $sql="SELECT * FROM `Disciplina`";
    $result=$conn->query($sql);
?>
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
    <h3>EXIBINDO TUDO</h3>
    </header>

    <table>
        <?php
            while ($Index = $result->fetch_assoc()) { 
                echo "<tr>";
                echo "<td>" . $Index['Nome'] . "</td>";
                echo "<td>" . $Index['IdDisciplina'] . "</td>";
                echo "<td>" . $Index['Periodo'] . "</td>";
                echo "<td>" . $Index['IdPreRequisito'] . "</td>";
                echo "<td>" . $Index['Creditos'] . "</td>";
                echo "</tr>";
            }
               
        ?>
    
    <h1><a href="MENU_PRINCIPAL.php">Volte ao menu</a></h1>
    
</body>
</html>