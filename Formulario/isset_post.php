<?php


if (isset($_POST['nome']) and isset($_POST['data']) and isset($_POST['email']) and isset($_POST['mensagem'])) {

    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $conteudo = "$nome\n $data\n $email\n $mensagem\r\n";

    $arquivo = fopen('isset_post.txt', 'a+');
    fwrite($arquivo, $conteudo);
    fclose($arquivo);
    echo "Nome: $nome </br> Data:$data </br> Email:$email </br> Mensagem é:$mensagem";
}
echo "</br>";
echo "</br>";
echo "<form method='post'>";
echo
"<left>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='index.php'>Cadastrar
              </button>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='le_texto_while.php'>ler
              </button>
            </left>
            <br/>
        </form>
                <br/>";
echo "</br>";
echo "</br>";
