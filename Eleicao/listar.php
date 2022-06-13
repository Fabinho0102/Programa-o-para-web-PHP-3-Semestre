<?php
include_once "conexao.php";

$sqlSelect = "SELECT ideleitor , nomeeleitor , tituloeleitor , rgeleitor, cpfeleitor, datadia , estadoeleitor , cidadeleitor, municipioeleitor, codpartido , voto FROM eleitor";
$result = mysqli_query($conexao, $sqlSelect) or die ("Erro ao retornar dados");


echo "<meta charset='UTF-8'>";
    echo "<center><h1>Dados<?h1></center>";
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
     <form method="post" name="pesquisa" onSubmit="return enviardados();" action="select.php">
            <label for="pesquisa" style="font-size: 25px;">Pesquisar:</label>
            <input type='text' name= 'pesquisar' id='pesquisar' autocomplete ='off' maxlenght = '80' placeholder= 'Digite o ID desejado'>
            <button type ='submit' formaction='select.php'>Pesquisar</button>
     </form>
   
    
   <?php
   //CONDIÇÃO QUE PERCORRE TODOS OS ITENS ARMAZENADOS NO BANCO E ARMAZENANDO NO ARRYA REGISTRO
    while($registro = mysqli_fetch_array($result))
    {
        //ATRIBUINDO UM ITEM DO ARRAY A UMA VARIÁVEL 
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
        <button type ='submit' formaction='index.html'>Voltar ao cadastro</button>
            </form>";
    
    
?>