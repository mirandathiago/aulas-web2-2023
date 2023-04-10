<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulários e o PHP</title>
</head>
<body>
    <!--
        Todos os campos do formulário devem vir entre as tags de abertura e fechamento da tag form que obrigatoriamente precisam ter dois atributos o action e o method.
        action -> informa qual arquivo irá receber os dados enviados deste formulário.
        method -> informa qual o método utilizado para o envio dos dados
            get
            post
    -->
    <form action="receber1.php" method="post">
        <label>
            Nome:
            <input name="nome" type="text">
        </label>
        <br>
        <label>
            Idade:
            <input type="number" name="idade">
        </label>
        <br>
        <button>Enviar</button>
    </form>
    


</body>
</html>