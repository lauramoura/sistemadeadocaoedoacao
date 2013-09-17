<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../src/dominio/Doacao.class.php';
include 'connectionFactory.inc.php';


class DoacaoDao {
    public function insertDoacao($doacao){
         $conn = get_connection();
        
        $stmt = $conn->prepare("INSERT INTO doacao(doador,animal)" + "VALUES(?, ?)");
        
        $stmt->bindParam(1, $doacao->get_doador());
        $stmt->bindParam(2, $doacao->get_animal());
        $stmt->execute();
    }
    public function deleteDoacao($doacao){}
    public function updateDoacao($doador,$animal,$doacao){}
    public function selectDoacao($doador,$animal){}
    public function selectAllDoacao(){}
    
}
?>
