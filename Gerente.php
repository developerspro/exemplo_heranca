<?php 
include "Funcionario.php";
class Gerente extends Funcionario{
    public $setor;


public function atribuisal($valor){
    if ($valor <2000){
    echo "Erro ao atribuir salario";
        $this->atribuiSalario(2000);
   } else { 
        $this->atribuiSalario($valor);
   }

}
}