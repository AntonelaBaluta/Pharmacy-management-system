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
$mesajEroare = "";

if ($categorieID != '' && $producatorID != '' && $distribuitorID != '' && $cod != '' && $nume != '' 
    && $cantitate != '' && $naturaExcipient != '' && $modAdministrare != '' && $pret != '' && $dataFabricare != '' 
    && $dataExpirare != '' && $stoc != '') {
    $query = "INSERT INTO Medicamente VALUES ('$categorieID', '$producatorID', '$distribuitorID', '$cod', '$nume', '$cantitate',
     '$naturaExcipient', '$modAdministrare', '$pret', '$dataFabricare', '$dataExpirare', '$stoc')";
    $stmt = $conn->query($query);                     
} else {
    $mesajEroare = "Introduceti un camp valid.";
}

header('Location: medicines.php');
exit(0);
?>