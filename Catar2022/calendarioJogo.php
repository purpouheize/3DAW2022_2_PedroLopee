<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "catar2022";
    $retorno = "";
    
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nomeA = $_GET["nomeA"]; 
        $nomeB = $_GET["nomeB"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `confronto` WHERE `selecaoA` = '$nomeA' AND `selecaoB` = '$nomeB' OR `selecaoA` = '$nomeB' AND `selecaoB` = '$nomeA'";
        
        $result=$conn->query($sql);
        $vetJogos[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc()){
            $vetJogos[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($vetJogos);

        } else {
            $retorno=json_encode("E R R O");
        }
    }
echo $retorno;
?>
