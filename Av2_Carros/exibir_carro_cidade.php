<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "carros";
    $retorno = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $cidade = $_GET["cidade"]; 
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `cars` WHERE `id` = $id";
        $result=$conn->query($sql);
        
        $disp = $result->fetch_assoc();

        if ($result=true){
            $retorno=json_encode($disp);

        } else {
            $retorno=json_encode("E R R O");
        }
    }
echo $retorno;
?>
