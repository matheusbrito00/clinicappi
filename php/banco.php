<?php
    function Banco() {
        $hospedeiro = "fdb30.awardspace.net";
        $nome = "3637020_projeto";
        $user = "3637020_projeto";
        $senha = "2R;wF4(dskXkX^#w2-bG";
    
        return new PDO("mysql:host=$hospedeiro;dbname=$nome", $user, $senha);
    }
?>
