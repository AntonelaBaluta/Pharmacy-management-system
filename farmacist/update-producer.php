<?php include 'include/config.php';?>
<?php

$nume = $_POST['nume'];
$oras = $_POST['oras'];
$judet = $_POST['judet'];
$strada = $_POST['strada'];
$numar = $_POST['numar'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$producatorID = (int) $_POST['producatorID'];
$mesajEroare = "";


if ($producatorID && $nume != '' && $oras != '' && $judet != '' && $strada != '' && $numar != '' && $telefon != '' && $email != '') {
    // UPDATE table_name
    // SET column1 = value1, column2 = value2, ...
    // WHERE condition;
    $query = "UPDATE Producatori
                SET Nume = '$nume', Oras = '$oras', Judet = '$judet', Strada = '$strada', Numar = '$numar', Telefon = '$telefon', Email = '$email'
                WHERE ProducatorID = $producatorID";
    $stmt = $conn->query($query);
} else {
    $mesajEroare = "Introduceti un camp valid.";
}

header('Location: producers.php');
exit(0);
?>