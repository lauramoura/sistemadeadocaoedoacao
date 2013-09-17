<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Animal
 *
 * @author 20112144110244
 */
class Animal {
   private $filhote;
   private $sexo;
   private $raça;
   private $cor;
   private $codigo;
   
   
   function __construct($filhote, $sexo, $raça, $cor, $codigo) {
       $this->filhote = $filhote;
       $this->sexo = $sexo;
       $this->raça = $raça;
       $this->cor = $cor;
       $this->codigo = $codigo;
   }

   public function getFilhote() {
       return $this->filhote;
   }

   public function setFilhote($filhote) {
       $this->filhote = $filhote;
   }

   public function getSexo() {
       return $this->sexo;
   }

   public function setSexo($sexo) {
       $this->sexo = $sexo;
   }

   public function getRaça() {
       return $this->raça;
   }

   public function setRaça($raça) {
       $this->raça = $raça;
   }

   public function getCor() {
       return $this->cor;
   }

   public function setCor($cor) {
       $this->cor = $cor;
   }

   public function getCodigo() {
       return $this->codigo;
   }

   public function setCodigo($codigo) {
       $this->codigo = $codigo;
   }


}

?>
