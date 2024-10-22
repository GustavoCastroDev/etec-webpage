<?php
//criando as variáveis de acesso ao banco
$local = "localhost";   //definindo local
$login = "root";    //definindo o login
$senha = "";    //definindo a senha
$banco = "aluno.sql";   //definindo o banco de dados

//abrindo as portas do banco de dados
$abrir_porta = mysqli_connect($local, $login, $senha, $banco);

//selecionando tudo da tabela 'aluno'
$query = "SELECT * FROM aluno";

//armazenando a resposta em uma variável
$resposta = mysqli_query($abrir_porta, $query);

//percorrendo todos os elementos do banco de dados e criando uma variável chamada '$info_bd', onde cada linha do banco possui essa variável
while($info_bd = mysqli_fetch_array($resposta)){
    echo"RM: ", $info_bd["id_aluno"], "  NOME: " $info_bd["nome_aluno"], "  IDADE: " $info_bd["idade_aluno"], "  CURSO: " $info_bd["curso_aluno"], "<br/>";
}
?>