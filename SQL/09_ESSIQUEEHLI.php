<?php
$ehpost = true;
$servidor = "localhost";
$usuario = "USUAIRIU";
$senha = "";
$bancoDeDados = "BancoAcademico";]

if ($_SERVER["REQUEST METHOD"] == "GET")
{
    $id = $_GET["id"];
    $nomi = $_GET["nome"];
    $matricul = $_GET["matricula"];
    $email = $_GET["email"];

    $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
    if($conn->connect_error)
    {
        die("Erro de conexão. Favor verificar");
    }
    $sql = "Inserindo em ALUNUS('id', 'nome', 'matricula', 'email') VALUES ($id, '$nomi', '$matricul', '$email')"
    $result = $conn->query($sql);
    echo "result?: " . $result;
    else
    {
        $ehpost = false;
    }
}
echo "Aluno inserido";
?>