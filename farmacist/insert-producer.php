<?php include 'include/config.php';?>
<?php

$nume = $_POST['nume'];
$oras = $_POST['oras'];
$judet = $_POST['judet'];
$strada = $_POST['strada'];
$numar = $_POST['numar'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$mesajEroare = "";

if ($nume != '' && $oras != '' && $judet != '' && $strada != '' && $numar != '' && $telefon != '' && $email != '') {
    $query = "INSERT INTO Producatori VALUES ('$nume', '$oras', '$judet', '$strada', '$numar', '$telefon', '$email')";  // prima interogare
    $stmt = $conn->query($query);                     // executa query (interogarea)
} else {
    $mesajEroare = "Introduceti un camp valid.";
}

header('Location: producers.php');
exit(0);
?>