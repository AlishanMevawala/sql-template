<?php 
include ('../inc/connect.php');


if(isset($_POST['submit'])) {
    echo '<pre>';
    var_dump($_POST);
    echo "</pre>";
    
    extract($_POST);   

    // old way
    // $insert_sql = "INSERT INTO table (column_names) VALUES ($variables)";
    // echo $insert_sql;
    // $insert_res = $conn->query($insert_sql);
    // if($conn->insert_id)
    // {
    //     $validation = "Inserted";
    //     }
    //     else {
    //         $validation = $conn->error;
    //     }
    // }
    
    // prepared statement way
    // $stmt_insert = $conn->prepare("INSERT INTO table (column_names) VALUES (?, ?, ?, ?, ?)");
    // $stmt_insert->bind_param("sdiss", $variables);
    
    // $stmt_insert->execute();        

    // if($stmt_insert->error) { 
    //         $validation = "Error: " . $stmt_insert->error;
    // } 
    // else { 
    //     $validation = "Expense Inserted";
    //     $date = $amount = $category = $store = $comment = "";             
    // }
    // $stmt_insert->close();    
}
        
?>


<?php 
include ('../inc/header.php');
?>

<form action="" method="post">
    <?php if (isset($validation)): ?>
        <div class="validation"><?php echo $validation; ?></div>
    <?php endif; ?>

    <label for="category">Category</label>
    <select name="category" id="category">
        <option value="">Please select a category</option>
        <?php
            $cat_sql = "SELECT * From categories ORDER BY category_name ASC";
            // procdural method
            // $cat_result = mysqli_query($conn, $cat_sql);
            // object oriented method (preffered)
            $cat_result = $conn->query($cat_sql); 
            if (mysqli_num_rows($cat_result) > 0) {
                while ($row = mysqli_fetch_assoc($cat_result)) {
                    $cat_id = $row['category_id'];
                }
            }
        ?>
    </select>
    
    <input type="submit" value="submit" name="submit">
</form>

<?php 
include ('../inc/footer.php');
?>
