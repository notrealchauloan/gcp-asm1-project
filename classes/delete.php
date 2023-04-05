<!-- Delete Form -->
<form action="classes/delete-process.php" method="get">
    <div class="delete-button">
        <input class="delete-btn" type="text" name="id" value="<?= $row[0] ?>">
        <button class="delete" type="submit">Delete</button>
    </div>  
</form>