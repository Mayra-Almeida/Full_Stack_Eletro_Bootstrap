<?php
$servername = "localhost";
$username = "mayraalmeida";
$password = "May1998@";
$database = "careguide";

//Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

//Verificando a conexão
if (!$conn) {
    die("A conexão ao BD falhou: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nossos Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="./funcoes.js"></script>
</head>

<body>

<?php
    $sql = "select * from referencias";

    }
    ?>

</body>

</html>


<?php
mysqli_close($conn);
?>