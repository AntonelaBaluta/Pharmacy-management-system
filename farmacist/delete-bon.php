<?php include 'include/config.php';?>
<?php
$id = $_POST['id'];

if ($id) {
    $query = "DELETE FROM Medicamente_Bon WHERE BonComandaID=$id"; 
    $stmt = $conn->query($query);

    $query = "DELETE FROM BonComanda WHERE BonComandaID=$id"; 
    $stmt = $conn->query($query);
}
echo true;
?>