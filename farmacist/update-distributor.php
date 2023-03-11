<?php include 'include/config.php';?>
<?php

$nume = $_POST['nume'];
$oras = $_POST['oras'];
$judet = $_POST['judet'];
$strada = $_POST['strada'];
$numar = $_POST['numar'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$dataAprovizionare = $_POST['data-aprovizionare'];
$distribuitorID = (int) $_POST['distribuitorID'];
$mesajEroare = "";


if ($distribuitorID && $nume != '' && $oras != '' && $judet != '' && $strada != '' && $numar != '' && $telefon != '' && $email != '' && $dataAprovizionare != '') {
    // UPDATE table_name
    // SET column1 = value1, column2 = value2, ...
    // WHERE condition;
    $query = "UPDATE Distribuitori
                SET Nume = '$nume', Oras = '$oras', Judet = '$judet', Strada = '$strada', Numar = '$numar', Telefon = '$telefon', Email = '$email', DataAprovizionare = '$dataAprovizionare'
                WHERE DistribuitorID = $distribuitorID";
    $stmt = $conn->query($query);
} else {
    $mesajEroare = "Introduceti un camp valid.";
}

header('Location: distributors.php');
exit(0);
?>