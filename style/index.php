<?php require_once 'crud.class.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Base</title>
    <style>
        table,td,th{
            border-collapse: collapse;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <header>
    <ul>
        <li> <a href="https://cc-asm1-s3880115.de.r.appspot.com/home">View</a></li>
        <li><a href="https://cc-asm1-s3880115.de.r.appspot.com/add">Create</a></li>
        <li> <a href="https://cc-asm1-s3880115.de.r.appspot.com/edit">Update</a></li>
    </ul>

    </header>
    <main>
        <h1>View</h1>

        <table>
        <?php
            $no_rows = count(file("gs://asm1-s3880115-question1-bucket/project.csv"));

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
    </main>
    <footer>

    </footer>
</body>

</html>