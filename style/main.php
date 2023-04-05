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
<a class="btn" href="classes/add.php">Add</a>

<div style="overflow-x:auto;">
  <table>
  <?php
    $no_rows = count(file("power.csv"));

    if($no_rows > 1)
    {
        $no_rows = ($no_rows - 1) + 1;
    }
    foreach($arrayData as $row){
  ?>
    <tr>
      <td> 
        <?php 
          include("classes/delete.php");
          // include("classes/edit.php");
        ?> 
      </td>
      <td> <?= $row[1]; ?> </td>
      <td> <?= $row[2]; ?> </td>
      <td> <?= $row[3]; ?> </td>
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
  </table>
</div>
</body>
</html>