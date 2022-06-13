<?php
header("Location: index.php");
require_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];

//armazenando comandos sql em uma variável
$sqlInsert = "INSERT INTO users (user_name, user_email, user_date, user_mensagem) 
VALUES ('$nome', '$email', '$data', '$mensagem')";

//funçao do php para validar a inserçâo de dados no banco.
//interpreta, analisa e verifica se a conexao esta ok.

$rs = mysqli_query($conn,$sqlInsert) or die ("Erro ao cadastrar dados");
echo "Dados cadastrados com sucesso!";
echo "$nome </br>
      $email </br>
      $data </br>
      $mensagem";

?>