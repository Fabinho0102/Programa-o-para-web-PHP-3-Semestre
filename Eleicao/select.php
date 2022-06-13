<?php
//adicionando a conexão do banco de dados ao arquivo
include_once "conexao.php";


//variável que armazena oq o usuário digitou no campo de pesquisa
$idpesquisa = $_POST['pesquisar'];

if (empty($idpesquisa)) {
    echo "<script language='javascript' type='text/javascript'>
        alert('Digite um ID para pesquisar um indice');window.location ='listar.php'</script>";
}
//efetuando comandos SQL e verificando através da query
$sqlSelectButton = "SELECT ideleitor , nomeeleitor , tituloeleitor , rgeleitor, cpfeleitor, datadia , estadoeleitor , cidadeleitor, municipioeleitor, codpartido , voto FROM eleitor where ideleitor LIKE '$idpesquisa'";
$result = mysqli_query($conexao, $sqlSelectButton) or die("Erro ao retornar dados");

//verificando se existe algum cadastro com o nome digitado
if (mysqli_num_rows($result) < 1) {
    echo "<script language='javascript' type='text/javascript'>
        alert('Nenhum Indice Encontrado');window.location ='listar.php'</script>";
}



echo "<meta charset='UTF-8'>";
echo "<center><h1>Dados Encontrados<?h1></center>";
echo "<center><table <style border=1; border-collapse = collapse></style>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Título Eleitor</th>";
echo "<th>Rg</th>";
echo "<th>CPF</th>";
echo "<th>Data</th>";
echo "<th>Estado</th>";
echo "<th>Cidade</th>";
echo "<th>Município</th>";
echo "<th>Número da Legenda</th>";
echo "<th>Voto</th>";
echo "<th>Deletar</th>";
echo "<th>Editar</th>";
echo "</tr>";
?>


<?php

    //ATRIBUINDO UM ITEM DO ARRAY A UMA VARIÁVEL
    while ($registro = mysqli_fetch_array($result)) {
 
    $id = $registro['ideleitor'];
    $nome = $registro['nomeeleitor'];
    $Titulo = $registro['tituloeleitor'];
    $rg = $registro['rgeleitor'];
    $cpf = $registro['cpfeleitor'];
    $data = $registro['datadia'];
    $estado = $registro['estadoeleitor'];
    $cidade = $registro['cidadeleitor'];
    $municipio = $registro['municipioeleitor'];
    $data = $registro['datadia'];
    $nlegenda = $registro['codpartido'];
    $voto = $registro['voto'];





    //ADICIONANDO MAIS LINHAS E COLUNAS COM OS ITENS DO BANCOS ATRIBUÍDOS AS VARIÁVEIS
    //CONCATENANDO
    echo "<tr border = 1>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $Titulo . "</td>";
    echo "<td>" . $rg . "</td>";
    echo "<td>" . $cpf . "</td>";
    echo "<td>" . $data . "</td>";
    echo "<td>" . $estado . "</td>";
    echo "<td>" . $cidade . "</td>";
    echo "<td>" . $municipio . "</td>";
    echo "<td>" . $data . "</td>";
    echo "<td>" . $nlegenda . "</td>";
    echo "<td>" . $voto . "</td>";

    //LINKS QUE CHAMAM AS PÁGINAS DE EDITAR E DELETAR REGISTROS
    echo "<td><a href='deletar.php?id=$id'>Deletar</a></td>";
    echo "</br>";
    echo "</tr>";
    }

echo "</table>";
    //BOTÃO PARA VOLTAR PARA O FORMULÁRIO DE CADASTRO / PÁGINA DE INÍCIO
    echo " <form>
    <button type ='submit' formaction='listar.php'>Voltar</button>
        </form>";


?>