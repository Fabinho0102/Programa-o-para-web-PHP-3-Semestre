<?php

 include_once "conexao.php";

  $name = $_POST['eleitor'];
  $titulo = $_POST['titulo'];
  $rg = $_POST['rg'];
  $cpf = $_POST['cpf'];
  $data = $_POST['data'];
  $estado = $_POST['estado'];
  $cidade = $_POST['cidade'];
  $municipio = $_POST['municipio'];
  $codigo = $_POST['codigo'];
  $voto = $_POST['voto'];
  
if (isset($_POST['eleitor']) and isset($_POST['titulo']) and isset($_POST['rg']) and isset($_POST['cpf']) and isset($_POST['data'])
and isset($_POST['estado']) and isset($_POST['cidade']) and isset($_POST['municipio']) and isset($_POST['codigo']) and isset($_POST['voto']))
{
 
   /* if (empty($nome) and empty($titulo) and empty($rg) and empty($cpf) and empty($data) and empty($estado) and empty($cidade)and empty($municipio)and empty($codigo)and empty($voto))
    {
        //script JS para exibir caixa de diálogo de confirmação
        echo "<script language='javascript' type='text/javascript'>
            alert('Preencha os Campos!!');window.location ='index.html'</script>";
    }
  if (empty($nome)) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Digite seu Nome!!');window.location ='index.html'</script>";
    } elseif (empty($titulo)) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Digite Seu Titulo!!');window.location ='index.html'</script>";
    } elseif (empty($rg)) {
        echo "<script language='javascript' type='text/javascript'>
            alert('RG Vazio!!');window.location ='index.html'</script>";
    } elseif (empty($cpf)) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Digite seu CPF!!');window.location ='index.html'</script>";
    } elseif (empty($data)) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Data Vazia!!');window.location ='index.html'</script>";
    } elseif (empty($estado)) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Sexo Vazio!!');window.location ='index.html'</script>";
    } elseif (empty($cidade)) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Digite sua Cidade!!');window.location ='index.html'</script>";
    } elseif (empty($municipio)) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Digite seu Município!');window.location ='index.html'</script>";
    } elseif (empty($codigo)) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Código Vazio!!');window.location ='index.html'</script>";
    } elseif (empty($voto)) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Voto Vazio!!');window.location ='index.html'</script>";
    }*/

$sqlInsertCadastro = "INSERT INTO eleitor (nomeeleitor , tituloeleitor , rgeleitor, cpfeleitor, datadia , estadoeleitor , cidadeleitor, municipioeleitor, codpartido , voto)
values('$name' , '$titulo' , '$rg' , '$cpf' , '$data' , '$estado', '$cidade' , '$municipio' , '$codigo' , '$voto')";

$rs = mysqli_query($conexao, $sqlInsertCadastro) or die("Erro ao cadastrar dados");
        
}
echo "os arquivos foram gravados!";




?>
