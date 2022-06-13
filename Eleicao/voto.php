<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Area de Votação</title>
</head>
<body>
<form method="post" action="insertvoto.php" name="dados" onSubmit="return enviardados();">
        <section class="container">
             <fieldset>
                <legend style="color:rgb(78, 48, 14); font-size: 24px; font-family: 'Koulen', cursive; font-size: 32px;">Voto do Eleitor</legend>
              <label class="form-label" for="input" >Número da Legenda ou Código do partido: </label>
              <br>
              <input type="number" class="form-text" name="codigo" id="codigo">
              <br>
              <br>
              <label class="form-label" for="input" >Voto: </label>
              <br>
              <input type="number" class="form-text" name="voto" id="voto">
              <br>
              <br>
              <div>
                  <span>
                  <input name="votar" type="submit" class="formobjects" value="Confirma" formaction="insertvoto.php">
                  </span>
                  <span>
                  <button class='waves-effect waves-light btn type='submit' name='action'  formaction='exibir.php'>ler
                  </button>
                  </span>
                  <span>
                  <button class='waves-effect waves-light btn type='submit' name='action'  formaction='index.html'>Voltar
                  </button>
                  </span>
              </div>
           </fieldset>
        </section>
        </form>
</body>
</html>