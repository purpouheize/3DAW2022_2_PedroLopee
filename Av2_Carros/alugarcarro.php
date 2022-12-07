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
            $sql="INSERT INTO `cars`('estado`) VALUES ('$nome')";
            $result=$conn->query($sql);
        } 
        else 
            {
                $retorno=json_encode("E R R O");
            }
        }
?>
