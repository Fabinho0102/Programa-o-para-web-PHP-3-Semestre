<?php
header("Conetnt-type: text/html; charset=utf-8");
date_default_timezone_set('America/Sao_Paulo');
include_once "conexao.php";

$sqlSelect = "SELECT idusuario, cpf, usuario_nome, usuario_sobrenome, usuario_email, telefone, sexo FROM usuario";
//funçao do php para validar a inserçâo de dados no banco.
//interpreta, analisa e verifica se a conexao esta ok.
$rs = mysqli_query($conexao, $sqlSelect) or die("Erro ao retornar dados");

echo "<meta charset='UTF-8'>";
echo "<center><table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Sobrenome</th>";
echo "<th>Email</th>";
echo "<th>Telefone</th>";
echo "<th>CPF</th>";
echo "<th>Sexo</th>";
echo "<th>Deletar</th>";
echo "<th>Atualizar</th>";
echo "</tr>";



//precorrendo todos os itens do banco e armazenando em variável
while ($registro = mysqli_fetch_array($rs)) {
    $id = $registro['idusuario'];
    $nome = $registro['usuario_nome'];
    $email = $registro['usuario_email'];
    $sobrenome = $registro['usuario_sobrenome'];
    $telefone = $registro['telefone'];
    $sexo = $registro['sexo'];
    $cpf = $registro['cpf'];
//concatenando
    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $sobrenome . "</td>";
    echo "<td>" . $email . "</td>";
    echo "<td>" . $telefone . "</td>";
    echo "<td>" . $cpf . "</td>";
    echo "<td>" . $sexo . "</td>";
    echo "<td><a href='delete.php?id=$id'><img src='exc.png' alt='Deletar' title='Deletar registro'></a></td>";
    echo "<td><a href='alterardados.html?id=$id.[idusuario].'><img src='.png alt='Atualizar' title='Atualizar registro'></a></td>";
    echo "</br>";
    echo "</tr>";
 

    
}

  /*  }
    if(empty($registro)){

        echo"<script language='javascript' type='text/javascript'>
        alert('Nenhum Registro Disponível');window.location ='index.html'</script>";
    }
    else*/
    // mysqli_close($conexao);
   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <button type ="submit" formaction="index.html">Inicio</button>
    </form>
</body>
</html>