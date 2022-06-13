<?php


function ler(){
    //variável arquivo armazena o nome e extensão do arquivo.
    $arquivo = "isset_get.txt";
    //variável $fp armazena a conexão com o arquivo e o tipo de ação.
    $fp = fopen ($arquivo , 'r');

    //lê o conteúdo do arquivo aberto.
    $dados = fread($fp , filesize($arquivo));

    //Fecha o arquivo.
    fclose($fp);

    return $dados;

}
echo "<h1><strong>Dados Recuperados com sucesso</strong></h1>";
echo nl2br(ler());