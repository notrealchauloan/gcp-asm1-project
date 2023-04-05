<?php require_once 'crud.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create New Entity</title>
    <style>
        .input-field{
            margin: 10px;
        }
        .input-label{
            display: inline-block;
            width: 20vh;

        }
        .input-value{
            display: inline-block;
        }
    </style>
</head>
<body>
    <header>
    <ul>
    <li> <a href="https://cc-asm1-s3880115.de.r.appspot.com/home">View</a></li>
        <li><a href="https://cc-asm1-s3880115.de.r.appspot.com/create">Create</a></li>
        <li> <a href="https://cc-asm1-s3880115.de.r.appspot.com/update">Update</a></li>
    </ul>
    </header>
    <main>
        <h1>Create new entity</h1>
        <form id="create-form" action="/create" method="post">
            <?php listField(); ?>
            <button form="create-form" type="submit">Sign Up</button>
        </form>
        <?php addrowCSV();?>
    </main>
    <footer>

    </footer>
</body>




</html>