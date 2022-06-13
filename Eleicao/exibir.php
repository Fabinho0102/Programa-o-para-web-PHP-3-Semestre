<?php
header("Conetnt-type: text/html; charset=utf-8");
date_default_timezone_set('America/Sao_Paulo');
include_once "conexao.php";

$sqlSelect = "SELECT * FROM eleitor";
//funçao do php para validar a inserçâo de dados no banco.
//interpreta, analisa e verifica se a conexao esta ok.
$rs = mysqli_query($conexao, $sqlSelect) or die("Erro ao retornar dados");

echo "<meta charset='UTF-8'>";
echo "<center><table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>CPF</th>";
echo "<th>RG</th>";
echo "<th>Data</th>";
echo "<th>cidade</th>";
echo "<th>estado</th>";
echo "<th>Municipio</th>";
echo "<th>Código de partido</th>";
echo "<th>Voto</th>";
echo "<th>deletar</th>";
echo "</tr>";



//precorrendo todos os itens do banco e armazenando em variável
while ($registro = mysqli_fetch_array($rs)) {
    $id = $registro['ideleitor'];
    $nome = $registro['nomeeleitor'];
    $titulo = $registro['tituloeleitor'];
    $cpf = $registro['cpfeleitor'];
    $rg = $registro['rgeleitor'];
    $data = $registro['datadia'];
    $estado= $registro['estadoeleitor'];
    $cidade= $registro['cidadeleitor'];
    $municipio= $registro['municipioeleitor'];
    $codpart= $registro['codPartido'];
    $voto= $registro['votoeleitor'];


//concatenando
    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $cpf . "</td>";
    echo "<td>" . $rg . "</td>";
    echo "<td>" . $data . "</td>";
    echo "<td>" . $cidade . "</td>";
    echo "<td>" . $estado . "</td>";
    echo "<td>" . $municipio . "</td>";
    echo "<td>" . $codpart . "</td>";
    echo "<td>" . $voto . "</td>";
    echo "<td><a href='delete.php?id=$id'><img src='exc.png' alt='Deletar' title='Deletar registro'></a></td>";
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