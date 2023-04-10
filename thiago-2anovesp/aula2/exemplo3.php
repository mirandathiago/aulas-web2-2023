<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- 
        Um Formulário para ser trabalhado no PHP é necessário ter em sua tag form dois atributos.
            action -> informa qual o arquivo que irá receber os dados enviados
            method -> informa qual o método de envio será utilizado.
                get -> utilizado para recuperar infomações, geralmente utilizado em formulários de pesquisa. Os dados são passados através da URL do navegador. 
                post -> utilizado para salvar e editar informações, geralmente utilizado em formulário de cadastro. Os dados são passados através da requisição HTTP.
    -->
    <form action="receber1.php" method="get" >
        <label>
            Nome: <input type="text" name="nome">
        </label>
        <br>
        <label>
            Idade: <input type="number" name="idade">
        </label>
        <br>
        <button>Enviar</button>

    </form>
    
</body>
</html>