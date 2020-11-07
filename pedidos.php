<?php
$servername = "localhost";
$username = "mayraalmeida";
$password = "May1998@";
$database = "fseletro";

//Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

//Verificando a conexão
if (!$conn) {

    die("A conexão ao Banco de dados falhou" . mysqli_connect_error());
}

if (isset($_POST['nome']) && isset($_POST['prod']) && isset($_POST['quant']) && isset($_POST['endereco'])) {
    $nome = $_POST['nome'];
    $prod = $_POST['prod'];
    $quant = $_POST['quant'];
    $endereco = $_POST['endereco'];
    $sql = "insert into pedidos (nome_cliente, nome_produto, quantidade, endereco) values('$nome','$prod','$quant','$endereco')";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pedidos</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="./funcoes.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <!-- Menu -->
    <?php
    include_once('menu.html');
    ?>

    <main>
        <div class="container-fluid">
            <header>
                <h2>Pedidos</h2>
            </header>
        </div>

        <hr>

        <br><br><br>

        <div class="container">
            <form class="form-group" method="post" action=""">
                 <h4> Nome: </h4>
        <input type=" text" name="nome" class="form-control mb-4" placeholder="Digite seu nome aqui...">
                <h4>Produto: </h4>
                <select name="prod" class="form-control" size="1" id="produto" value="selecione">
                    <option value=" selecione">Escolha seu produto</option>
                    <option value="Geladeira Frost Free Brastemp Side Inverse 540 Litros">Geladeira Frost Free Brastemp Side Inverse 540 Litros</option>
                    <option value="Geladeira Frost Free Brastemp Branca 375 Litros">Geladeira Frost Free Brastemp Branca 375 Litros</option>
                    <option value="Geladeira Frost Free Consul Prata 340 Litros">Geladeira Frost Free Consul Prata 340 Litros</option>
                    <option value="Fogão 4 Bocas Consul Inox com Mesa de Vidro">Fogão 4 Bocas Consul Inox com Mesa de Vidro</option>
                    <option value="Fogão de Piso 4 Bocas Atlas com Acendimento Automático">Fogão de Piso 4 Bocas Atlas com Acendimento Automático</option>
                    <option value="Forno de Microondas Consul 32 Litros Inox 220V">Forno de Microondas Consul 32 Litros Inox 220V</option>
                    <option value="Forno de Microondas 25 Litros Espelhado Philco 220V">Forno de Microondas 25 Litros Espelhado Philco 220V</option>
                    <option value="Forno de Microondas Electrolux 20 Litros Branco">Forno de Microondas Electrolux 20 Litros Branco</option>
                    <option value="Lava-Louça Electrolux Inox com 10 Serviços, 06 Programas de Lavagem e Painel Blue Touch">Lava-Louça Electrolux Inox com 10 Serviços, 06 Programas de Lavagem e Painel Blue Touch</option>
                    <option value="Lava-Louça Compacta 8 Serviços Branca 127V Brastemp">Lava-Louça Compacta 8 Serviços Branca 127V Brastemp</option>
                    <option value="Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca">Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca</option>
                    <option value="Lavadora de Roupas Philco Inverter 12KG">Lavadora de Roupas Philco Inverter 12KG</option>
                </select><br><br>
                <h4>Quantidade: </h4>
                <input type="number" name="quant" class="form-control mb-4" placeholder="Ex: 2">
                <h4>Endereco: </h4>
                <input type="text" name="endereco" class="form-control mb-4" placeholder="Digite seu endereço aqui...">
                <input type="submit" class="btn btn-secondary" name="submit">
            </form>
        </div>

    </main>

    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br>
    <br><br>

    <div class="container">
        <footer id="rodape">
            <p id="forma_pagamento">Formas de Pagamento:</p>
            <img src="./imagens/forma_pagamento.jpg" alt="Formas de Pagamento" width="380" align="center">
            <p>&copy; Full Stack Eletro</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>




</html>

<?php
mysqli_close($conn);
?>