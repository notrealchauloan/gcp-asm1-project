<?php
include('crud.class.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $crud = new Crud();
    
    $result = $crud->add_data($_POST);

    if($result){
        $_SESSION['message'] = $result;
        echo 'fail';
    } else {
        $_SESSION['message'] = 'Successfully Added New Record';
        header("Location: /main.php");
    }   
}