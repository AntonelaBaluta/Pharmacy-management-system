<?php include 'include/config.php';?>
<?php

$distribuitorID = $_POST['distribuitorID'];
$numarComanda = $_POST['numarComanda'];
$data = $_POST['data'];
$medicamenteID = $_POST['medicamenteID'];
$numarMedicamente = $_POST['numarMedicamente'];
$numarMedicamente = explode(',', $numarMedicamente);
$mesajEroare = "";

$medicamenteComandate = [];
foreach($medicamenteID as $key => $medicamentID) {
    $medicamenteComandate[$medicamentID] = $numarMedicamente[$key]; // facem un vector cu asocierea medicamentID -> NumarMedicamente
}

if ($distribuitorID != '' && $numarComanda != '' && $data != '' && count($medicamenteComandate)) {
    $query = "SELECT MedicamentID,Pret FROM Medicamente";
    $stmt = $conn->query($query);
    $medicamente = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $pretTotal = 0;
    foreach ($medicamente as $medicament) {
        if (isset($medicamenteComandate[$medicament['MedicamentID']])) {
            $numarMedicamente = $medicamenteComandate[$medicament['MedicamentID']];
            $pretTotalMedicament = $numarMedicamente * $medicament['Pret'];
            $pretTotal = $pretTotal + $pretTotalMedicament;
        }
    }   
    $query = "INSERT INTO BonComanda VALUES ('$distribuitorID', '$numarComanda', '$data', '$pretTotal')";  

    $stmt = $conn->query($query);   

    $bonComandaID = $conn->lastInsertId();

    foreach ($medicamenteComandate as $medicamentID => $numarMedicamente) {
        $query = "INSERT INTO Medicamente_Bon VALUES ('$bonComandaID', '$medicamentID', '$numarMedicamente')";  
        $stmt = $conn->query($query);   
    }
                  
} else {
    $mesajEroare = "Introduceti un camp valid.";
}

header('Location: bonuri.php');
exit(0);
?>