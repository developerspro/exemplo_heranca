<?php 

include 'Gerente.php';
$objetoPessoa = new Pessoa();
$objetoPessoa->nome = "Pato Donald";
echo $objetoPessoa->nome;

$objetoFuncionario = new Funcionario();

$objetoFuncionario->atribuiSalario(200);
$objetoFuncionario->nome = "<br>Pateta";
echo $objetoFuncionario->nome;


$objetoGerente = new Gerente();
