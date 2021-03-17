<?php
     $serve_file = $_SERVER['DOCUMENT_ROOT'] . "/projeto2/";
     session_save_path($serve_file . 'cache/temp');
     session_start();
     include_once($serve_file . 'projeto/php/conexao.php');

     $id = $_POST['id'];
     $nome = $_POST['nome'];
     $informacoes = $_POST['info'];
     $datahora = $_POST['dataevento'];
     $endereco = $_POST['endereco'];
     $horaevento = $_POST['horaevento'];
     $cidade = $_POST['cidade'];
     $tipo = $_POST['tipo'];
     $status = $_POST['status'];
     $idPegar = $_POST['idPegar'];

    $sql = "UPDATE agendamento set id = '$id', nomeEvento = '$nome', informacoesevento ='$informacoes', dataevento ='$datahora', endereco ='$endereco', horaevento = '$horaevento', cidade = '$cidade', tipoevento = '$tipo', statusEvento = '$status' where id = '$idPegar'";
    $result  = mysqli_query($conn, $sql);
    $rows = mysqli_affected_rows($conn);
    if($rows > 0){
        echo "<script>alert('Atualizado Com Sucesso!');window.location.href='http://localhost/projeto2/projeto/tabela.php';</script>";
    }else{
        echo "ERRO AO ATUALIZAR!";
    }