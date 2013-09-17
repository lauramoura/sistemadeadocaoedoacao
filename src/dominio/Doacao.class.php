<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Doacao
 *
 * @author 20112144110244
 */
class Doacao {
    private $doador;
    private $animal;
    
    function __construct($doador, $animal) {
        $this->doador = $doador;
        $this->animal = $animal;
    }

    
    public function getDoador() {
        return $this->doador;
    }

    public function setDoador($doador) {
        $this->doador = $doador;
    }

    public function getAnimal() {
        return $this->animal;
    }

    public function setAnimal($animal) {
        $this->animal = $animal;
    }


}

?>
