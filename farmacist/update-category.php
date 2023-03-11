<?php include 'include/config.php';?>
<?php

$numeCategorie = $_POST['nume-categorie'];
$descriere = $_POST['descriere'];
$categorieID = (int) $_POST['categorieID'];
$mesajEroare = "";

if ($categorieID) {
    if ($numeCategorie != '') {
        if ($descriere != '') {
            // UPDATE table_name
            // SET column1 = value1, column2 = value2, ...
            // WHERE condition;
            $query = "UPDATE Categorii
                      SET Nume = '$numeCategorie', Descriere = '$descriere'
                      WHERE CategorieID = $categorieID";
            $stmt = $conn->query($query);
        } else {
            $mesajEroare = "Introduceti o descriere pentru categorie";
        }
    }
} else {
    $mesajEroare = "Introduceti un nume pentru categorie";
}

header('Location: categories.php');
exit(0);
?>