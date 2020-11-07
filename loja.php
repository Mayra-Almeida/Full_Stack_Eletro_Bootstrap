<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nossas Lojas</title>
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
                <h2>Nossas lojas</h2>
            </header>
        </div>


        <hr>

        <section>
            <div class="container" style="align-items: center;" class="grupo_lojas">
                <div class="grupo_loja">
                    <h3 style="margin-left: 40px" ;>Rio de Janeiro</h3>
                    <ul ul class="list_none">
                        <li>Avenida Presidente Vargas, 5000</li>
                        <li>10° andar</li>
                        <li>Centro</li>
                        <li>(21) 3333-3333</li>
                    </ul>
                </div>
                <div class="grupo_loja">
                    <h3 style="margin-left: 40px" ;>São Paulo</h3>
                    <ul ul class="list_none">
                        <li>Avenida Avenida Paulista, 985</li>
                        <li>3° andar</li>
                        <li>Jardins</li>
                        <li>(11) 4444-4444</li>
                    </ul>
                </div>
                <div class="grupo_loja">
                    <h3 style="margin-left: 39px" ;> Santa Catarina</h3>
                    <ul class="list_none">
                        <li>Rua Major &Aacute;vila</li>
                        <li>370</li>
                        <li>Vila Mariana</li>
                        <li>(47) 5555-5555</li>

                    </ul>
                </div>
            </div>
        </section>
    </main>

    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br>

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