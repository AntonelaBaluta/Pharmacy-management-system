<?php include 'include/config.php';?>
<?php
$id = $_POST['id'];

if ($id) {
    $query = "DELETE FROM Medicamente WHERE MedicamentID=$id"; 
    $stmt = $conn->query($query);
}
echo true;
?>