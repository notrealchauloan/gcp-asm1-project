<?php
  include("classes/crud.class.php");
  $crud = new Crud();
  $arrayData = $crud->format_db('power.csv');
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/style/stylesheet.css">
<body>

<h2 align="center">Project Information</h2>

<div style="overflow-x:auto;">
  <table>
    <!-- <tr>
      <th>Project Name</th>
      <th>Name</th>
      <th>Subtype</th>
      <th>Current Status</th>
      <th>Capacity MW</th>
      <th>Year of Completion</th>
      <th>Country list of Sponsor/Developer</th>
      <th>Sponsor/Developer Company</th>
      <th>Country list of Lender/Financier</th>
      <th>Lender/Financier Company</th>
      <th>Country list of Construction/EPC</th>
      <th>Construction Company/EPC Participant</th>
      <th>Country</th>
      <th>Province/State</th>
      <th>District</th>
      <th></th>
    </tr> -->
  <?php
    foreach($arrayData as $row){
  ?>
    <tr>

      <td> <?= $row[0]; ?> </td>
      <td> <?= $row[1]; ?> </td>
      <td> <?= $row[2]; ?> </td>
      <td> <?= $row[3]; ?> </td>
      <td> <?= $row[4]; ?> </td>
      <td> <?= $row[5]; ?> </td>
      <td> <?= $row[6]; ?> </td>
      <td> <?= $row[7]; ?> </td>
      <td> <?= $row[8]; ?> </td>
      <td> <?= $row[9]; ?> </td>
      <td> <?= $row[10]; ?> </td>
      <td> <?= $row[11]; ?> </td>
      <td> <?= $row[12]; ?> </td>
      <td> <?= $row[13]; ?> </td>
      <td> <?= $row[14]; ?> </td>
    </tr>
    

  <?php
    }
  ?>
        <td>
        <button> <?php //include("classes/add.php"); ?> </button>
        <button> <?php //include("classes/edit.php"); ?> </button>
        <button> <?php //include("classes/delete.php"); ?> </button>
      </td>
  </table>
</div>

</body>
</html>