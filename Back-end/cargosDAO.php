<?php

class CargosDAO{
    public function create (Cargos $Cargos) {
        $sql = 'INSERT INTO Cargos (Nome, SalarioBase, Situacao) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Cargos->getNOME());
        $stmt->bindValue(2, $Cargos->getSALARIOBASE());
        $stmt->bindValue(3, $Cargos->getSITUACAO());

        $stmt->execute();
    }

    public function read() {
        $sql = 'SELECT CargoID, Nome, SalarioBase, Situacao FROM Cargos';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }


    public function update(Cargos $Cargos) {
        $sql = 'UPDATE Cargos SET Nome = ?, SalarioBase = ?, Situacao = ? WHERE CargoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Cargos->getNOME());
        $stmt->bindValue(2, $Cargos->getSALARIOBASE());
        $stmt->bindValue(3, $Cargos->getSITUACAO());
        $stmt->bindValue(4, $Cargos->getCARGOID());
    
        $stmt->execute();
    }
    

    public function delete($CargoID) {
        $sql = 'DELETE FROM Cargos WHERE CargoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $CargoID);
    
        $stmt->execute();
    }
}
?>    
