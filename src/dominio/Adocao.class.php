<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adocao
 *
 * @author 20112144110244
 */
class Adocao {
    private $dono;
    private $animal;
    
    function __construct($dono, $animal) {
        $this->dono = $dono;
        $this->animal = $animal;
    }

    
    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getAnimal() {
        return $this->animal;
    }

    public function setAnimal($animal) {
        $this->animal = $animal;
    }


}

?>
