<?php include 'include/config.php';?>
<?php

$categorieID = $_POST['categorieID'];
$producatorID = $_POST['producatorID'];
$distribuitorID = $_POST['distribuitorID'];
$cod = $_POST['cod'];
$nume = $_POST['nume'];
$cantitate = $_POST['cantitate'];
$naturaExcipient = $_POST['naturaExcipient'];
$modAdministrare = $_POST['modAdministrare'];
$pret = $_POST['pret'];
$dataFabricare = $_POST['dataFabricare'];
$dataExpirare = $_POST['dataExpirare'];
$stoc = $_POST['stoc'];
$medicamentID = (int) $_POST['medicamentID'];
$mesajEroare = "";

if ($categorieID != '' && $producatorID != '' && $distribuitorID != '' && $cod != '' && $nume != '' 
    && $cantitate != '' && $naturaExcipient != '' && $modAdministrare != '' && $pret != '' && $dataFabricare != '' 
    && $dataExpirare != '' && $stoc != '') {
    
    $query = "UPDATE Medicamente
        SET CategorieID = '$categorieID', ProducatorID = '$producatorID', DistribuitorID = '$distribuitorID', Cod = '$cod', Nume = '$nume',
        Cantitate = '$cantitate', NaturaExcipient = '$naturaExcipient', ModAdministrare = '$modAdministrare', Pret = '$pret', DataFabricare = '$dataFabricare',
        DataExpirare = '$dataExpirare', Stoc = '$stoc'
        WHERE MedicamentID = $medicamentID";
    $stmt = $conn->query($query);                   
} else {
    $mesajEroare = "Introduceti un camp valid.";
}

header('Location: medicines.php');
exit(0);
?>