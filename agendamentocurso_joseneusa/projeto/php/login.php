<?php
    $serve_file = $_SERVER['DOCUMENT_ROOT']."/projeto2/";
    session_save_path($serve_file.'cache/temp');
    session_start();
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
   

    $sql = "SELECT * from cadastro where nome = '$nome' and senha = '$senha'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if($row > 0){
        while($row2 = mysqli_fetch_assoc($result)){
            $nome = $row2['nome'];
            $id = $row2['id'];
            $_SESSION['nome'] = $nome;
            $_SESSION['id'] = $id;
        }
header('Location: http://localhost/projeto2/projeto/tabela.php');
   }else{
        echo "<script>alert('Você não tem acesso!');window.location.href='projeto2/projeto/form_validation.html';</script>";
   }
   
   ?>