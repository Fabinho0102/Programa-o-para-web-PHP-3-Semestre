<?php
header("Conetnt-type: text/html; charset=utf-8");
date_default_timezone_set('America/Sao_Paulo');
include_once "conexao.php";
echo "</br></br>";

//selecionando dados da tabela
$sqlSelect = "SELECT user_id, user_name, user_email, user_date, user_mensagem FROM users";

//funçao do php para validar a inserçâo de dados no banco.
//interpreta, analisa e verifica se a conexao esta ok.
$rs = mysqli_query($conn, $sqlSelect);

//condição que verifica se tem itens cadastrados
if (mysqli_num_rows($rs) > 0){ 

    //percorrendo todos os itens da variável
    while($row = mysqli_fetch_assoc($rs)){
    
     //exibindo na tela de forma concatenada os itens obtidos do select
        echo "id: ".$row["user_id"].
        " - Nome: " .$row["user_name"]. 
        " - Email: " .$row["user_email"].
        " - Data: " . date("d/m/y", strtotime($row["user_date"])).  
        " - Mensagem: " .$row["user_mensagem"]. "</br>";
}
}
else{
    echo "Não Foram encotrados registros cadastrados";
}

mysqli_close($conn);
?>