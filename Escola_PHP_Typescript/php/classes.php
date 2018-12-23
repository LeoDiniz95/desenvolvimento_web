<?php

    class Pessoa{
        public $nome;
        protected $rg;

        /**********************
        *    CONSTRUTORES     *
        **********************/

        function Pessoa($nome, $rg){
            $this->nome         = $nome;
            $this->rg           = $rg;
        }

        /********************
        *     GETTERS       *
        ********************/

        function getNome(){
            return $this->nome;
        }

        function getRg(){
            return $this-rg;
        }

        /********************
        *     SETTERS       *
        ********************/

        function setNome($nome){
            $this->nome = nome;
        }

        function setRg($rg){
            $this->rg = rg;
        }

    }

    /**********************************************
    *                     Aluno                   * 
    **********************************************/
    class Aluno extends Pessoa{
        private $RA;
        private $turno;
        private $status;// cursando, formado, matrícula trancada ou se desistiu

        /**********************
        *    CONSTRUTORES     *
        **********************/

        function Aluno($nome,$rg,$RA,$turno,$status){
            $this->nome         = $nome;
            $this->rg           = $rg;
            $this->RA           = $RA;
            $this->turno        = $turno;
            $this->status       = $status;
        }

        /********************
        *     GETTERS       *
        ********************/

        function getRA(){
            return $this->RA;
        }

        function getTurno(){
            return $this->turno;
        }

        function getStatus(){
            return $this->status;
        }

        /********************
        *     SETTERS       *
        ********************/

        function setRA($RA){
            $this->RA = $RA;
        }

        function setTurno($turno){
            $this->turno = $turno;
        }

        function setStatus($status){
            $this->status = $status;
        }

        
    }

    /**********************************************
    *               Funcionario                   * 
    **********************************************/
    class Funcionario extends Pessoa{
        protected $salarioHora;    // salario ganho por hora
        protected $qntHoraMes;        //  quantidade de horas trabalhadas por mês

        /**********************
        *    CONSTRUTORES     *
        **********************/
        function Funcionario($nome,$rg,$salarioHora,$qntHoraMes){
            $this->nome             = $nome;
            $this->rg               = $rg;
            $this->salarioHora      = $salarioHora;
            $this->qntHoraMes       = $qntHoraMes;
        }
        
        /********************
        *     GETTERS       *
        ********************/

        function getSalarioHora(){
            return $this->salarioHora;
        }

        function getQtnHoraMes(){
            return $this->qntHoraMes;
        }

        /********************
        *     SETTERS       *
        ********************/

        function setSalarioHora($salarioHora){
            $this->salarioHora = $salarioHora;
        }

        function setQtnHoraMes($qntHoraMes){
            $this->qntHoraMes = $qntHoraMes;
        }
    }

    /**********************************************
    *                  Professor                  * 
    **********************************************/
    class Professor extends Funcionario{
        
        private $areaAtuacao;    // Área de atuação do professor

        /**********************
        *    CONSTRUTORES     *
        **********************/
        function Professor($nome,$rg,$salarioHora,$qntHoraMes,$areaAtuacao){
            $this->nome             = $nome;
            $this->rg               = $rg;
            $this->salarioHora      = $salarioHora;
            $this->qntHoraMes       = $qntHoraMes;
            $this->areaAtuacao      = $areaAtuacao;
        }
        
        /********************
        *     GETTERS       *
        ********************/

        function getAreaAtuacao(){
            return $this->areaAtuacao;
        }

        /********************
        *     SETTERS       *
        ********************/
        function setAreaAtuacao($areaAtuacao){
            $this->areaAtuacao = $areaAtuacao;
        }
    }

?>