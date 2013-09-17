<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../src/dominio/Adocao.class.php';
include 'connectionFactory.inc.php';


class AdocaoDao {
    public function insertAdocao($adocao){
        $conn = get_connection();
        
        $stmt = $conn->prepare("INSERT INTO adocao(dono,animal)" + "VALUES(?, ?)");
        
        $stmt->bindParam(1, $adocao->get_dono());
        $stmt->bindParam(2, $adocao->get_animal());
        $stmt->execute();
    }
    public function deleteAdocao($adocao){}
    public function updateAdocao($dono,$animal,$adocao){}
    public function selectAdocao($dono,$animal){}
    public function selectAllAdocao(){}
            
}
?>
