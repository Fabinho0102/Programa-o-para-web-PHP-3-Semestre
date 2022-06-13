<?php 

include_once "conexao.php";

$codigo = $_POST['id'];

$sqlDelete = " DELETE FROM users WHERE user_id = '".$codigo."' ";

if (!mysqli_query($conn,$sqlDelete))
{
    die('Erro ao excluir o registro: ' . mysqli_error($conn));

}

echo "<CENTER><H1>Registro deletado com sucesso!!</br></CENTER>";
mysqli_close($conn);
?>