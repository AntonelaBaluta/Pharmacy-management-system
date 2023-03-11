<?php include 'include/config.php';?>
<?php

$numeCategorie = $_POST['nume-categorie'];
$descriere = $_POST['descriere'];
$mesajEroare = "";

if ($numeCategorie != '') {
    if ($descriere != '') {
        $query = "INSERT INTO Categorii VALUES ('$numeCategorie', '$descriere')";  // prima interogare
        $stmt = $conn->query($query);                     // executa query (interogarea)
    } else {
        $mesajEroare = "Introduceti o descriere pentru categorie"; 
    }
} else {
    $mesajEroare = "Introduceti un nume pentru categorie";
}

header('Location: categories.php');
exit(0);
?>