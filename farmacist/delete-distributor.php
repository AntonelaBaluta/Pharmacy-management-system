<?php include 'include/config.php';?>
<?php
$id = $_POST['id'];

if ($id) {
    $query = "DELETE FROM Distribuitori WHERE DistribuitorID=$id"; 
    $stmt = $conn->query($query);
}
echo true;
?>