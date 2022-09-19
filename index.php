<?php include ('inc/connect.php'); ?>

<?php include ('inc/header.php');  ?>

<?php 

echo "a change has been made";

$sql = "SELECT column_names FROM table ORDER BY column DESC/ASC";

$result = $conn->query($sql);

if($conn->error) {
    echo $conn->error;
}
else{
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            extract($row);            
        }        
    } else {
        echo "<p>Sorry there are no records available that match your query</p>";
    }
}
?>
<?php include ('inc/footer.php');  ?>