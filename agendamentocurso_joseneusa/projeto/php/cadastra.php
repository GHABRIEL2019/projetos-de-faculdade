<?php 

include 'conexao.php';

$nome = $_POST['name'];
$endereco = $_POST['endereco'];
$email = $_POST['email']; 
$confirmeemail = $_POST['email2'];
$cpf = $_POST['cpf'];
$data = $_POST['date'];
$hora = $_POST['time'];
$senha = $_POST['password'];
$senha2 = $_POST['password2'];
$telefone = $_POST['phone'];
$messagem = $_POST['message'];
$sql = "INSERT into Cadastro(nome,endereco,email,confirmeemail,cpf,datahora,Hora,senha,Repetirsenha,telefone,INFORMAÇÕES) values ('$nome', '$endereco', '$email', '$confirmeemail','$cpf ','$data','$hora','$senha','$senha2','$telefone','$messagem')";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_affected_rows($conn);
    if($rows > 0){
        echo "<script>alert('Cadastro realizado com sucesso!');window.location.href='http:/projeto2/projeto/form.html'</script>";

    }else{
        echo "<script>alert('ERRO AO CADASTRAR!');window.location.href='http:/projeto2/projeto/form.html'</script>";
    }
?>	