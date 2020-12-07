<?php
    require "../php/banco.php";
    try {
        $banco = Banco();
    }
    catch (PDOException $e) {
        echo "<p>Erro interno no servidor 😔</p>";
        die();
    }

    if ($_SERVER['REQUEST_METHOD'] != "POST") {
        echo '<p>Algo de errado não está certo</p>';
        return;
    }
    $bairro = $cidade = $estado = $cep = $log = "";
    if (isset($_POST["bairro"])) {
        $bairro = $_POST["bairro"];
    }
    if (isset($_POST["cidade"])) {
        $cidade = $_POST["cidade"];
    }
    if (isset($_POST["estado"])) {
        $estado = $_POST["estado"];
    }
    if (isset($_POST["lograd"])) {
        $log = $_POST["lograd"];
    }
    if (isset($_POST["cep"])) {
        $cep = $_POST["cep"];
    }

    $sql = 'INSERT INTO base_enderecos_ajax VALUES (?, ?, ?, ?, ?);';
    $statement = $banco->prepare($sql);
    $statement->execute([$cep, $log, $bairro, $cidade, $estado]);
?>