<?php 
session_start();
include_once 'verifica_login.php';
include_once 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_SPECIAL_CHARS);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
$clt = filter_input(INPUT_POST, 'clt', FILTER_SANITIZE_SPECIAL_CHARS);
$serie = filter_input(INPUT_POST, 'serie', FILTER_SANITIZE_SPECIAL_CHARS);
$funcao = filter_input(INPUT_POST, 'funcao', FILTER_SANITIZE_SPECIAL_CHARS);
$identidade = filter_input(INPUT_POST, 'identidade', FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
$pf = filter_input(INPUT_POST, 'pf', FILTER_SANITIZE_SPECIAL_CHARS);
$salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_SPECIAL_CHARS);
$admissao = filter_input(INPUT_POST, 'admissao', FILTER_SANITIZE_SPECIAL_CHARS);
$demissao = filter_input(INPUT_POST, 'demissao', FILTER_SANITIZE_SPECIAL_CHARS);
$funcionario = filter_input(INPUT_POST, 'funcionario', FILTER_SANITIZE_SPECIAL_CHARS);
$observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_SPECIAL_CHARS);


$sql = "insert into funcionarios (nome,email,celular,cep,rua,numero,complemento,bairro,cidade,uf,nascimento,clt,serie,funcao,identidade,rg,pf,salario,admissao,demissao,funcionario,observacao) values ('$nome','$email','$celular','$cep','$rua','$numero','$complemento','$bairro','$cidade','$uf','$nascimento','$clt','$serie','$funcao','$identidade','$rg','$pf','$salario','$admissao','$demissao','$funcionario','$observacao')";

$salvar = mysqli_query($conexao,$sql);


if(mysqli_affected_rows($conexao)):
    echo "<script>alert('Registro criado com sucesso.')</script>";
    echo '<script>window.location.href = "../listar-funcionarios.php";</script>';
  else:
    echo "<script>alert('Seu registro não foi criado. Verifique os dados e tente novamente!')</script>";
    echo '<script>window.location.href = back();</script>';
endif;

mysqli_close($conexao);

 ?>