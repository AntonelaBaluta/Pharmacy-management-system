<?php include 'include/config.php';?>
<?php
$id = $_POST['id'];

if ($id) {
    $query = "DELETE FROM Categorii WHERE CategorieID=$id"; 
    $stmt = $conn->query($query);
}
echo true;
?>