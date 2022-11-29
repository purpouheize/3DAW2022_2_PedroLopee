<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "carros";
    $retorno = "";
    
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `cars`";
        
        $result=$conn->query($sql);
        $vetDisp[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc()){
            $vetDisp[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($vetDisp);

        } else {
            $retorno=json_encode("E R R O");
        }
    }
echo $retorno;
?>
