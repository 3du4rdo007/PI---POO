<?php
@include('../../PDO_back/Conexao.php'); 
@include('../Cargos.php');
@include('../CargosDAO.php');

$CargosDAO = new CargosDAO();

$cargos = $CargosDAO->read();
if (count($cargos) > 0) {
    foreach ($cargos as $cargo) {
        // Verifica se as chaves existem antes de acessar
        $cargoID = isset($cargo['CargoID']) ? $cargo['CargoID'] : 'N/A';
        $nome = isset($cargo['Nome']) ? $cargo['Nome'] : 'N/A';
        $salarioBase = isset($cargo['SalarioBase']) ? $cargo['SalarioBase'] : 'N/A';
        $situacao = isset($cargo['Situacao']) ? $cargo['Situacao'] : 'N/A';

        echo 'ID: ' . $cargoID . '<br>';
        echo 'Nome: ' . $nome . '<br>';
        echo 'Salário Base: ' . $salarioBase . '<br>';
        echo 'Situação: ' . $situacao . '<br>';
        echo '<hr>';
    }
} else {
    echo 'Nenhum cargo encontrado.';
}
?>

