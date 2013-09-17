<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author 20112144110244
 */
class Pessoa {
    private $nome;
    private $sobrenome;
    private $rg;
    private $telefone;
    private $email;
    
    function __construct($nome, $sobrenome, $rg, $telefone, $email) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->rg = $rg;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getRg() {
        return $this->rg;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }


}

?>
