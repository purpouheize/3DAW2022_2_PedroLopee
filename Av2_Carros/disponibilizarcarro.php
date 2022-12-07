<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "carros";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $carro = $_GET["carro"]; 
        $nome = $_GET["nome"];
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        if ($result=true)
        {
            $sql="UPDATE `cars` SET `estado`= 'Disponivel' , ` WHERE `nome` = '$nome', 'carro' = '$carro' ";
            $result=$conn->query($sql);
        } 
        else {
            {
                $retorno=json_encode("E R R O");
            }
        }
        
        $result=$conn->query($sql);
        echo $sql;
    }
?>