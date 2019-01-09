<?php
include '../view/header.php';
?>

    <div id="main">

        <form action="." method="post" id="aligned">
            <input type="hidden" name="action" value="add_movie"/>
            <label>Title:</label>
            <input type="text" required name="title" value=""/><br/>
            <label>Year Released:</label>
            <select id="released" name="released" required>
                <?php
                for($i = 1890; $i < date("Y")+1; $i++){
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
                ?>
            </select><br/>
            <label>Director:</label>
            <input type="text" required name="director" value="" /><br/>
            <label>Runtime (mins.):</label>
            <input type="number" required name="runtime" value=""/><br/>
            <label>Genre:</label>
            <input type="text" required name="genre" value=""/><br/>
            <label>&nbsp;</label>
            <input type="submit" value="Add Movie"/><br />
        </form>

<a href="." >Back to List</a>
</div>
<?php
include '../view/footer.php';
?>