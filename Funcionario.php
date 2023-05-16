<?php 
include "Pessoa.php";
class Funcionario extends Pessoa { 
    public $registro;
    public $cargo;
    private $salario;
    public $depto;

    protected function atribuiSalario($valor){
        if($valor <100){
            echo "Salario invalido";
            $this->salario =100;
        } else { 
            $this->salario = $valor;
        }
    }
}   