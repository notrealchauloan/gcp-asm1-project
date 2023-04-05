<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $table = fopen('../power.csv','r');
    $temp_table = fopen('../table_temp.csv','w');
    $id = 'something'; // the name of the column you're looking for

    while (($data = fgetcsv($table, 1000)) !== FALSE){
        if(reset($data) == $id){ // this is if you need the first column in a row
            continue;
        }
        fputcsv($temp_table,$data);
    }
    fclose($table);
    fclose($temp_table);
    rename('table_temp.csv','table.csv');
}