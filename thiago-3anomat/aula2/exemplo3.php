<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulários em PHP</title>
</head>
<body>
    <!-- 
        No html é utilizada a tag form para a criação de formulários em que todos os campos devem estar entre a sua abertura e fechamento para serem devidamente enviados. Para o PHP é necessário que todos os formulários tenham dois atributos o action e method.
        action -> indica para qual o arquivo os dados do formulário vão ser enviados
        method -> indica qual o método que vai ser utilizado para o envio. Podendo ser o get ou o post.
        get -> Os dados são passados através da URL (endereço do arquivo). Utilizado para recuperar informação (pesquisa)
        post -> Os dados são passados através da requisição HTTP gerada pelo navegador. Utilizado para salvar informações. Pode trafegar também arquivos. 

    -->
    <form action="receber1.php" method="post">
        <label>
            Nome:
            <input type="text" name="nome">
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