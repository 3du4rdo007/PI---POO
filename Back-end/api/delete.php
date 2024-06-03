<?php
@include('../../PDO_back/Conexao.php'); 
@include('../Cargos.php');
@include('../CargosDAO.php');

$CargosDAO = new CargosDAO();

$cargoID = 5;
$CargosDAO->delete($cargoID);

echo "Cargo deletado com sucesso.";
?>
