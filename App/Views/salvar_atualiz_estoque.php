<?php
include_once('conexao.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $item = $_POST['item'];
    $local = $_POST['local'];
    $quantidade = $_POST['quantidade'];
    $validade = $_POST['validade'];
    $unidade = $_POST['unidade'];

    if($conexao) {
        $sqlUpdate = "UPDATE tb_estoque set item='$item',local='$local',quantidade='$quantidade',validade='$validade',unidade='$unidade' 
        WHERE id='$id'";
        $result = $conexao->query($sqlUpdate);
    } else {
        echo "Erro ao conectar ao banco de dados.";
    }
}

?>