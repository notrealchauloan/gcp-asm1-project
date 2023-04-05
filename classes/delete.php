<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $table = fopen('../power.csv','r');
    $temp_table = fopen('../table_temp.csv','w');
    $id = $_GET['id'];

    while (($data = fgetcsv($table, 1000)) !== FALSE){
           if($data[0] == $id){
            unset($data);
            continue;
           }
            fputcsv($temp_table,$data);
        }

    fclose($table);
    fclose($temp_table);
    rename('../table_temp.csv','../power.csv');
    header("Location: ../main.php");
}
?>
<!-- Delete Form -->
<form action="" method="get">
    <div class="delete-button">
        <input class="delete-btn" type="text" name="id" value="<?= $row[0] ?>">
        <button class="delete" type="submit">Delete</button>
    </div>  
</form>