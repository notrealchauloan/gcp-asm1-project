<?php require_once 'crud.classes.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Udate Entity</title>
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
        <li> <a href="http://abstract-botany-354904.et.r.appspot.com/home">View</a></li>
        <li><a href="http://abstract-botany-354904.et.r.appspot.com/create">Create</a></li>
        <li> <a href="http://abstract-botany-354904.et.r.appspot.com/update">Update</a></li>
    </ul>
    </header>
    <main>

        <h1>Search project entity</h1>
        <form id="search-form" action="/update" method="get">
            <div class="input-field">
                <div class="input-label">
                    <label for="id">Search for Employee ID first</label>
                </div>
                <div class="input-value">
                    <input type="text" name="id" id="id">
                </div>
            </div>
            <button form="search-form" type="submit">Search</button>
        </form>

        <form id="update-form" action="/update" method="post">

        <div class="input-field">
            <div class="input-label">
                    <label for="command">Type Delete to delete, else if blank: update</label>
                </div>
                <div class="input-value">
                    <input type="text" name="command" id="command">
                </div>
            </div>
            <?php searchrowCSV(); ?>
            <button form="update-form" type="submit">Update</button>
            <button form="update-form" type="submit">Delete this row</button>
        </form>
    </main>
    <footer>

    </footer>
</body>




</html>