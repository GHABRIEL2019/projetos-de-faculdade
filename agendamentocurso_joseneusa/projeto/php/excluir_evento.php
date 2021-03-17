<?php
    $serve_file = $_SERVER['DOCUMENT_ROOT'] . "/projeto2/";
    session_save_path($serve_file . 'cache/temp');
    session_start();
    include_once($serve_file . 'projeto/php/conexao.php');

    $id = $_POST['id'];

    $sql = "DELETE from agendamento where id = '$id'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_affected_rows($conn);
    if($rows > 0){
        echo "<script>alert('Evento Excluido Com Sucesso!');window.location.href='http://localhost/projeto2/projeto/tabela.php';</script>";
    }else{
        echo "Erro ao excluir Evento!";
    }
    ?>