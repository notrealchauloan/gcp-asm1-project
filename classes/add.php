<?php
include('crud.class.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $crud = new Crud();
    
    $result = $crud->add_data($_POST);

    if($result){
        echo 'fail';
    } else {
        echo 'succeed';
        // header("Location: ../?url=main");
    }   
}
?>
<form action="" method="POST" class="create-post" enctype="multipart/form-data">
    <label for="project-name" class="custom-project-name">Project Name</lable>
    <input id="project-name" type="text" name="project-name"><br>

    <label for="name" class="custom-name">Name</lable>
    <input id="name" type="text" name="name"><br>

    <label for="subtype" class="custom-subtype">Subtype</lable>
    <input id="subtype" type="text" name="subtype"><br>

    <label for="current-status" class="custom-current-status">Current Status</lable>
    <input id="current-status" type="text" name="current-status"><br>

    <label for="capacity-mw" class="custom-capacity-mw">Capacity MW</lable>
    <input id="capacity-mw" type="text" name="capacity-mw"><br>

    <label for="yearofcompletion" class="custom-yearofcompletion">Year of Completion</lable>
    <input id="yearofcompletion" type="text" name="yearofcompletion"><br>

    <label for="countrylist-sponsor" class="custom-countrylist-sponsor">Country list of Sponsor</lable>
    <input id="countrylist-sponsor" type="text" name="countrylist-sponsor"><br>

    <label for="sponsor" class="custom-sponsor">Sponsor/Developer Company</lable>
    <input id="sponsor" type="text" name="sponsor"><br>

    <label for="countrylistlender" class="custom-countrylistlender">Country list of Lender/Financier</lable>
    <input id="countrylistlender" type="text" name="countrylistlender"><br>

    <label for="lender" class="custom-lender">Lender/Financier Company</lable>
    <input id="lender" type="text" name="lender"><br>

    <label for="countrylistconstruction" class="custom-countrylistconstruction">Country list of Construction/EPC</lable>
    <input id="countrylistconstruction" type="text" name="countrylistconstruction"><br>

    <label for="construction" class="custom-construction">Construction Company/EPC Participant</lable>
    <input id="construction" type="text" name="construction"><br>

    <label for="country" class="custom-country">Country</lable>
    <input id="country" type="text" name="country"><br>

    <label for="province" class="custom-province">Province/State</lable>
    <input id="province" type="text" name="province"><br>

    <label for="district" class="custom-district">District</lable>
    <input id="district" type="text" name="district"><br>

    <div>
        <label for="submit_form">
            <input type="submit" value="Add" type="text">
        </label>
    </div>
  </div>

</form>