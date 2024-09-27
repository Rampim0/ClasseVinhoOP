<?php
require_once 'Vinho.php';
if ((isset($_POST["BtnVinho"]))){
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $preco = (double)$_POST['preco'];
    $safra = (int)$_POST['safra'];

    $vinho = new Vinho($nome, $tipo, $preco, $safra);

    echo $vinho->mostrarVinho()."<br>";

    if ($vinho->verificarPreco($preco)) {
        echo "Produto em Oferta";
    } else {
        echo "Produto com o preço normal";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vinho</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Cadastro de Vinho</h1>
    <form method="POST" action="Vinho.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" required><br><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0,01" required><br><br>

        <label for="safra">Safra:</label>
        <input type="number" id="safra" name="safra" required><br><br>

        <input type="submit" value="Cadastrar Vinho" name="BtnVinho" id="BtnVinho">
    </form>
</body>
</html>
