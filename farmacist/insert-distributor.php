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
$mesajEroare = "";

if ($nume != '' && $oras != '' && $judet != '' && $strada != '' && $numar != '' && $telefon != '' && $email != '' && $dataAprovizionare != '') {
    $query = "INSERT INTO Distribuitori VALUES ('$nume', '$oras', '$judet', '$strada', '$numar', '$telefon', '$email', '$dataAprovizionare')";
    $stmt = $conn->query($query);                     
} else {
    $mesajEroare = "Introduceti un camp valid.";
}

header('Location: distributors.php');
exit(0);
?>