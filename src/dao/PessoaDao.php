<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../src/dominio/Pessoa.class.php';
include 'connectionFactory.inc.php';


class PessoaDao {
    public function insertPessoa($pessoa){
        $conn = get_connection();
        
        $stmt = $conn->prepare("INSERT INTO pessoa(nome,sobrenome,rg,telefone,email)" + "VALUES(?, ?, ?, ?, ?)");
        
        $stmt->bindParam(1, $pessoa->get_nome());
        $stmt->bindParam(2, $pessoa->get_sobrenome());
        $stmt->bindParam(3, $pessoa->get_rg());
        $stmt->bindParam(4, $pessoa->get_telefone());
        $stmt->bindParam(5, $pessoa->get_email());
        $stmt->execute();
           
    }
    public function deletePessoa($pessoa){}
    public function updatePessoa($rg,$pessoa){}
    public function selectPessoa($rg){}
    public function selectAllPessoa(){}
    
}
?>
