<?php

include_once "conexao.php";
include_once "listar.php";
include_once "validacoes.php";

if(!empty($_GET['id']))
{

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuario WHERE idusuario=$id";
        $resultado = mysqli_query($sqlSelect,$conexao);

        if(mysqli_num_rows($resultado > 0))
        {
            while($user_data = mysqli_fetch_assoc($resultado){

            
            $nome = $user_data['nome'];
            $sobrenome = $user_data['sobrenome'];
            $cpf = $user_data['cpf'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo'];
        }
      }

}

//include_once "alterarcancela.php";


//filtragem utilizando sanitize
$nome = filter_input(INPUT_POST, 'nome',
FILTER_SANITIZE_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_POST, 'sobrenome',
FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST , 'cpf',
FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST , 'email',
FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone',
FILTER_SANITIZE_NUMBER_INT);

    
    //Verificar se o usuário preencheu o campo
/*if(empty($nome) or empty($sobrenome) or empty($cpf) or empty($email) or empty($telefone) or empty($sexo))
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Campo Vazio!!');window.location ='alterardados.html'</script>";    
        die("Campo Vazio!"); 
}  */
      //Verificar a existencia das variaveis
      if(isset($_POST['nome'])and isset($_POST['sobrenome']) and isset($_POST['cpf']) and isset($_POST['email']) and isset($_POST['telefone']) and isset($_POST['sexo'])){
        if(!empty($_POST['nome']) or ($_POST['sobrenome']) or ($_POST['cpf']) or ($_POST['email']) or($_POST['telefone']) or ($_POST['sexo']))
        {
        
            }
           if(validaCPF($cpf) == false)
            {
                echo"<script language='javascript' type='text/javascript'>
                alert('Digite um CPF Válido!');window.location ='index.html'</script>";   
            }
    
            if(!validaremail($email))
            {
                echo"<script language='javascript' type='text/javascript'>
                alert('Digite um Email Válido!');window.location ='index.html'</script>";    
            }
    
            if(validatelefone($telefone) == false)
            {
                echo"<script language='javascript' type='text/javascript'>
                alert('Digite um Telefone Válido!');window.location ='index.html'</script>";    
            }
            else{
                
                 //inserindo os dados do insert no banco
                
                $sql= "UPDATE usuario SET usuario_nome = '$nome', usuario_email = '$email', usuario_sobrenome = '$sobrenome', telefone = '$telefone' WHERE idusuario = '$alterar'";
                //$sql= "UPDATE users SET user_name = '$nome', user_email = '$email', user_date = '$data', user_mensagem = '$mensagem' WHERE user_id = '$codigo'";
                // Caso haja algum erro na string SQl ou na conexao do banco de dados  finaliza a operação
                if (!mysqli_query($conexao,$sql))     
                    {
            die('Erro ao atualizar o registro:' . mysqli_error($conexao));
                    } 
                          // Caso esteja tudo correto com a string SQl e na conexão com o banco de dados imprime uma mensagem para o usuário
                      echo"<script language='javascript' type='text/javascript'>
                        alert('Usuário Alterado!');window.location ='listar.php'</script>";
                      echo "Registro atualizado com sucesso.<br/>";
            //echo "$nome";
        //Fecha a conexão com o banco de dados
        mysqli_close($conexao);
        }
    }
if (!mysqli_query($conexao,$sql))
{

    die('Erro ao atualizar o registro:' . mysqli_error($conexao));

} 

// Caso esteja tudo correto com a string SQl e na conexão com o banco de dados imprime uma mensagem para o usuário

echo"<script language='javascript' type='text/javascript'>
    alert('Usuário Alterado!');window.location ='listar.php'</script>";
echo "Registro atualizado com sucesso.<br/>";
    //echo "$nome";

//Fecha a conexão com o banco de dados

mysqli_close($conexao);



// Redireciona para a página mostrando dos os registros cadastrados no banco

//header("Location: select_variavel_a.php");

?>
