<?php 
    require_once 'crud.php';     
    session_start();
?>

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
        <!-- <li> <a href="/home">View</a></li>
        <li><a href="create.php">Create</a></li>
        <li> <a href="update.php">Update</a></li> -->
        <li> <a href="https://cc-asm1-s3880115.de.r.appspot.com/home">View</a></li>
        <li><a href="https://cc-asm1-s3880115.de.r.appspot.com/create">Create</a></li>
        <li> <a href="https://cc-asm1-s3880115.de.r.appspot.com/update">Update</a></li>
    </ul>

    </header>
    <main>
        <h1>View</h1>

        <table>
            <?php readCSV(); ?>
        </table>
    </main>
    <footer>

    </footer>
</body>

</html>