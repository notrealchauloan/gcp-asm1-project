<?php
$file_path = "gs://asm1-s3880115-question1-bucket/project.csv";
function searchrowCSV(){
    global $file_path;
    $data = [];
    $titled_index =[];
    $undefined_index = [];
    $id = '';
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        session_start();
        if($_GET['id'] != null){
            $file = fopen($file_path, 'r');
            if(filesize($file == 0)){
                echo "can't open for read";
                return false;
            }
            $skip = 0;
            while(($row = fgetcsv($file,null,",")) != FALSE){
                if($skip == 0){
                    for($i = 0; $i< count($row); $i++){
                        $titled_index[] = $row[$i];
                    }
                    $skip++;
                }else{
                    if($row[0] === $_GET['id']){
                        $_SESSION["id"] = $_GET['id'];
                        for($i = 0; $i< count($row); $i++){
                                $field_name = 'field'.$i;
                                echo '<div class="input-field">
                            <div class="input-label">
                                <label for="'.$field_name.'">'.$titled_index[$i].'</label>
                            </div>
                            <div class="input-value">
                                <input type="text" placeholder="'.$row[$i].'" name="'.$field_name.'" id="'.$field_name.'">
                            </div>
                        </div>';
                            
                        }
                        echo '</br>';
                    }
                }
            }
            fclose($file);
        }
        
    }


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start();

        if($_POST['command'] == "delete"){

            $file = fopen($file_path, 'r');
            if(filesize($file == 0)){
                echo "can't open for read";
                return false;
            }
            while(($row = fgetcsv($file,null,",")) != FALSE){
                if($row[0] === $_SESSION['id']){
                    echo "Deleted";
                }else{
                    $data[] = $row;
                }
            }
            fclose($file);

            $file = fopen($file_path, 'w');
            if(filesize($file == 0)){
                echo "can't open for write";
                return false;
            }
            for($i =0; $i < count($data); $i++){
                fputcsv($file, $data[$i]);
            }
            fclose($file);
        }else{
            $file = fopen($file_path, 'r');
            if(filesize($file == 0)){
                echo "can't open for read";
                return false;
            }
            while(($row = fgetcsv($file,null,",")) != FALSE){
                if($row[0] === $_SESSION['id']){
                    //echo $_SESSION["undefined_index"][0];
                    for ($i = 0; $i < count($row); $i ++){
                            if($_POST['field'.$i] != ''){
                                $row[$i] = $_POST['field'.$i];
                            }
                    }
                }
                $data[] = $row;
            }
            fclose($file);

            $file = fopen($file_path, 'w');
            if(filesize($file == 0)){
                echo "can't open for write";
                return false;
            }
            for($i =0; $i < count($data); $i++){
                fputcsv($file, $data[$i]);
            }
            fclose($file);
        }
    }
    return true;
}

function addrowCSV(){
    $field = [];
    $data = [];
    $lengthrow = 0;
    global $file_path;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $file = fopen($file_path, 'r');
        if(filesize($file == 0)){
            echo "can't open for read";
            return false;
        }

        while(($row = fgetcsv($file,null,",")) != FALSE){
            $data[] = $row;
            $lengthrow = count($row);
        }

        for($i = 0; $i < $lengthrow; $i++){
            try{
                if($_POST['field1'] == "" ){
                    echo "First Name must not null";
                    return false;
                }
                if($_POST['field2'] == ""){
                    echo "Last Name must not null";
                    return false;
                }
                $temp = $_POST['field'.$i];
            }catch(Exception $e){
                $temp = '';
            }
            $field[] = $temp;
        }

        fclose($file);

        $file = fopen($file_path, 'w');
        if(filesize($file == 0)){
            echo "can't open for write";
            return false;
        }
        $data[] = $field;
        for($i =0; $i < count($data); $i++){
            fputcsv($file, $data[$i]);
        }
        echo "Create new entity successfully";
        fclose($file);
    }
    return true;
}
function listField(){
    global $file_path;
    $file = fopen($file_path, 'r');
    if(filesize($file == 0)){
        echo "can't open";
        return false;
    }
    echo "opened";
    $skip = 0;
    while(($data = fgetcsv($file,null,",")) != FALSE){
        if($skip == 0){
            for($i=0; $i < count($data); $i++){
                        $field_name = 'field'.$i;
                        echo '<div class="input-field">
                    <div class="input-label">
                        <label for="'.$field_name.'">'.$data[$i].'</label>
                    </div>
                    <div class="input-value">
                        <input type="text" name="'.$field_name.'" id="'.$field_name.'">
                    </div>
                </div>';
            }
            $skip++;
        }
    }
    fclose($file);
    return true;
}



function readCSV(){
    global $file_path;
    $data = [];

    $file = fopen($file_path, 'r');
    if(filesize($file == 0)){
        echo "can't open for read";
    }
    
    $skip = 0;
    while(($data = fgetcsv($file,null,",")) != FALSE){
        if($skip = 0){
            echo '<tr>';
            for ($i = 0; $i < count($data); $i++){
                echo '<th>'. $data[$i]. '<th>';
            }
            echo '</tr>';
            $skip = $skip + 1;
        }else{
            echo '<tr>';
            for ($i = 0; $i < count($data); $i++){
                echo '<td>'. $data[$i]. '<td>';
            }
            echo '</tr>'; 
        }
    }

}
?>