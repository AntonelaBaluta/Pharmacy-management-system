<?php include 'include/config.php';?>
<?php
$id = $_POST['id'];

if ($id) {
    $query = "DELETE FROM Producatori WHERE ProducatorID=$id"; 
    $stmt = $conn->query($query);
}
echo true;
?>