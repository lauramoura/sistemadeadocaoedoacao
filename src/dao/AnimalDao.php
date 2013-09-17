<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../src/dominio/Animal.class.php';
include 'connectionFactory.inc.php';


class AnimalDao {
    public function insertAnimal($animal){
         $conn = get_connection();
        
        $stmt = $conn->prepare("INSERT INTO animal(filhote,sexo,raca,cor,codigo)" + "VALUES(?, ?, ?, ?, ?)");
        
        $stmt->bindParam(1, $animal->get_filhote());
        $stmt->bindParam(2, $animal->get_sexo());
        $stmt->bindParam(3, $animal->get_raca());
        $stmt->bindParam(4, $animal->get_cor());
        $stmt->bindParam(5, $animal->get_codigo());
        $stmt->execute();
        
    }
    public function deleteAnimal($animal){}
    public function updateAnimal($codigo,$animal){}
    public function selectAnimal($codigo){}
    public function selectAllAnimal(){}
    
    
}
?>
