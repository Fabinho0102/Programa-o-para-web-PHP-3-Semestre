
<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Salvar txt GET</title>
</head>

<body>

   <form method="post" action="delete.php" name="dados" onSubmit="return enviardados();">

      <table width="588" border="0" align="center">

         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">ID:</font>
            </td>
            <td width="460">
               <input name="id" type="text" class="formbutton" id="id" size="52" maxlength="150">
            </td>
         </tr>

        
            <td>
            <button type='submit' formaction='index.php'>Cadastrar</button>
            </td>
            <td>
               <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
            </td>
            <td>
               <button type='submit' formaction='select.php'>Consultar</button>
            </td>
            <td>
               <input type='submit' name="submit" value="Deletar">
            </td>
         </tr>
      </table>
   </form>
</body>

</html>