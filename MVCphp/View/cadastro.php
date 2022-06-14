<!DOCTYPE html>
<html lang="pt-br">
<?php include_once("head.php") ?>

<script language="javascript" type="text/javascript">
    function formatarMoeda() {
        var elemento = documento.getElementById('preco');
        var valor = preco.value;


        valor = valor + '';
        valor = parseInt(valor.replace(/[\D]+/g, ''));
        valor = valor + '';
        valor = valor.replace(/([0-9]{2})$/g, ",$1");

        if (valor.length > 6) {
            valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
        }
        elemento.value = valor;

    }

    function validar(formulario) {
        var quantidade = form.quantidade.value;
        var preco = form.preco.value;
        for (i = 0; i <= formulario.length - 2; i++) {
            if ((formulario[i].value == "")) {
                alert("Preencha o campo" + formulario[i].name);
                formulario[i].focus();
                return false;
            }
        }
        if (quantidade <= 0) {
            alert('A quantidade de paginas nao pode ser igual ou inferior a 0');
            form.quantidade.focus();
            return false;
        }
        if (preco <= 0) {
            alert('O preço do livro não pode ser igual ou inferiori a 0');
            form.preco.focus();
            return false
        }
        formulario.submit();
    }
</script>

<body>
    <?php include_once("menu.php"); ?>
    <form method="post" action="../Controller/controllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
        <div class="form-group">
            <div class="mx-auto" style="width:500px;">
                <label for="nome">NomedoLivro</label>
                <input class="form-control" type="text" id="nome" name="nome" placeholder="NomedoLivro" requiredautofocus>
            </div>
        </div>
        <div class="form-group">
            <div class="mx-auto" style="width:500px;">
                <label for="autor">Nomedoautor</label>
                <input class="form-control" type="text" id="autor" name="autor" placeholder="AutordoLivro" required>
            </div>
        </div>
        <div class="form-group">
            <div class="mx-auto" style="width:500px;">
                <label for="quantidade">Quantidadedepáginas</label>
                <input class="form-control" type="number" id="quantidade" name="quantidade" placeholder="QuantidadedePáginas" required>
            </div>
        </div>
        <div class="form-group">
            <div class="mx-auto" style="width:500px;">
                <label for="number">Valorunitáriodolivro</label>
                <input class="form-control" type="text" id="preco" name="preco" placeholder="PreçodoLivro" onkeypress="formatarMoeda()"; required>
            </div>
        </div>
        <div class="form-group">
            <div class="mx-auto" style="width:500px;">
                <label for="date">Datadelançamentodolivro</label>
                <input class="form-control" type="date" id="data" name="data" placeholder="DatadePulicação" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10" style="text-align: right;">
                <button type="submit" class="btnbtn-success" id="cadastrar">Cadastrar</button>
            </div>
        </div>
    </form>
    </div>

</body>

</html>