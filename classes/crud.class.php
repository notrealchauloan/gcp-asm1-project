<?php
class Crud{
    private $error = "Code Error";
    
    // Format database
    public function format_db($filename){
        // The nested array to hold all the arrays
        $formatted_db = [];

        // Open the file for reading
        if (($h = fopen("{$filename}", "r")) !== FALSE)
        {
            while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
                {
                    $formatted_db[] = $data;
                }
            return $formatted_db;

            fclose($h);
        }
    }

    // Get data in row if $check == $index
    public function get_data($check, $index, $filename){
        if(!is_array($filename)){
            $formatted_db = $this->format_db($filename);   
        } else {
            $formatted_db = $filename;
        }

        // Filter data of the user in the session
        $result = array_filter( 
            $formatted_db, 
            function($item) use ($index, $check){
                if(isset($item[$index])){
                    return ($item[$index] == $check);
                }
            });
        return $result;
    }

    // Add New Data Row
    public function add_data($data){
        $projectname = $data['project-name'];
        $name = $data['name'];
        $subtype = $data['subtype'];
        $currentstatus = $data['current-status'];
        $capacitymw = $data['capacity-mw'];
        $yearofcompletion = $data['yearofcompletion'];
        $countrylistsponsor = $data['countrylist-sponsor'];
        $sponsor = $data['sponsor'];
        $countrylistlender = $data['countrylistlender'];
        $lender = $data['lender'];
        $countrylistconstruction = $data['countrylistconstruction'];
        $construction = $data['construction'];
        $country = $data['country'];
        $province = $data['province'];
        $district = $data['district'];
        // create by PHP
       
        $file_open = fopen("../power.csv", "a");
        $no_rows = count(file("../power.csv"));
        if($no_rows > 1)
        {
            $no_rows = ($no_rows - 1) + 1;
        }

        $form_data = array(
            'sr_no' => "id". $no_rows,
            'projectname' => $projectname,
            'name' => $name,
            'subtype' => $subtype,
            'currentstatus' => $currentstatus,
            'capacitymw' => $capacitymw,
            'yearofcompletion' => $yearofcompletion,
            'countrylistsponsor' => $countrylistsponsor,
            'sponsor' => $sponsor,
            'countrylistlender' => $countrylistlender,
            'lender' => $lender,
            'countrylistconstruction' => $countrylistconstruction,
            'construction' => $construction,
            'country' => $country,
            'province' => $province,
            'district' => $district,
        );
        $registration = implode(",", $form_data);
        fwrite($file_open, "\n{$registration}");
    }

    public function edit_data($data){
        $projectname = $data['project-name'];
        $name = $data['name'];
        $subtype = $data['subtype'];
        $currentstatus = $data['current-status'];
        $capacitymw = $data['capacity-mw'];
        $yearofcompletion = $data['yearofcompletion'];
        $countrylistsponsor = $data['countrylist-sponsor'];
        $sponsor = $data['sponsor'];
        $countrylistlender = $data['countrylistlender'];
        $lender = $data['lender'];
        $countrylistconstruction = $data['countrylistconstruction'];
        $construction = $data['construction'];
        $country = $data['country'];
        $province = $data['province'];
        $district = $data['district'];
  
        $file_open = fopen("../power-updated.csv", "a");
        $no_rows = count(file("../power-updated.csv"));
        if($no_rows > 1)
        {
            $no_rows = ($no_rows - 1) + 1;
        }
  
        $form_data = array(
            'sr_no' => $no_rows,
            'projectname' => $projectname,
            'name' => $name,
            'subtype' => $subtype,
            'currentstatus' => $currentstatus,
            'capacitymw' => $capacitymw,
            'yearofcompletion' => $yearofcompletion,
            'countrylistsponsor' => $countrylistsponsor,
            'sponsor' => $sponsor,
            'countrylistlender' => $countrylistlender,
            'lender' => $lender,
            'countrylistconstruction' => $countrylistconstruction,
            'construction' => $construction,
            'country' => $country,
            'province' => $province,
            'district' => $district,
        );
        $registration = implode(",", $form_data);
        fwrite($file_open, "{$registration}\n");
        // header('Location: edit-process.php?id='.$no_rows);
        }
}

?>