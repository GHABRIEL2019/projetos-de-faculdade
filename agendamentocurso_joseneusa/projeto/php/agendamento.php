<?php 

include 'conexao.php';

$nome = $_POST['evento'];
$informacoes = $_POST['info'];
$datahora = $_POST['datahora'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$tipo = $_POST['tipo'];
$status = $_POST['status'];

$sql = "INSERT into agendamento(nomeEvento,informacoesevento,dataevento, endereco,horaevento, cidade, tipoevento, statusEvento) values ('$nome', '$informacoes', '$datahora', '$endereco','$horaevento ','$cidade ','$tipo ','$status ')";
$result = mysqli_query($conn, $sql);
$rows = mysqli_affected_rows($conn);
    if($rows > 0){
        echo "<script>alert('Evento agendado  com sucesso!');window.location.href='http://localhost/projeto2/projeto/tabela.php'</script>";

    }else{
        echo "<script>alert('ERRO AO AGENDAR!');window.location.href='http:/projeto2/projeto/form.html'</script>";
    }
?>	