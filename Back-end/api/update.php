<?php

@include('../../PDO_back/Conexao.php'); 
@include('../Cargos.php');
@include('../CargosDAO.php');

$CargosDAO = new CargosDAO();

$CargoID = 5; // ID do cargo que será atualizado
$Nome = "TesteAtualizado";
$SalarioBase = 2500;
$Situacao = 1;

$Cargos = new Cargos($CargoID, $Nome, $SalarioBase, $Situacao);
$Cargos->setCARGOID($CargoID);
$Cargos->setNOME($Nome);
$Cargos->setSALARIOBASE($SalarioBase);
$Cargos->setSITUACAO($Situacao);

$CargosDAO->update($Cargos);

echo "Cargo atualizado com sucesso!";
?>
