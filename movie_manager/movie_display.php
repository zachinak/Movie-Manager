<?php
include '../view/header.php';
?>

    <div id="main">

        <form action="." method="post" id="aligned">
            <input type="hidden" name="action" value="update_movie"/>
            <label>Movie Id:</label>
            <input type="number" name="movie_id" value="<?php echo $movie['id']; ?>"/><br/>
            <label>Title:</label>
            <input type="text" name="title" value="<?php echo $movie['title']; ?>"/><br/>
            <label>Year Released:</label>
            <input type="number" name="released" value="<?php echo $movie['released']; ?>"/><br/>
            <label>Director:</label>
            <input type="text" name="director" value="<?php echo $movie['director']; ?>" /><br/>
            <label>Runtime (mins.):</label>
            <input type="number" name="runtime" value="<?php echo $movie['runtime']; ?>"/><br/>
            <label>Genre:</label>
            <input type="text" name="genre" value="<?php echo $movie['genre']; ?>"/><br/>
            <label>&nbsp;</label>
            <input type="submit" value="Update Movie"/><br />
        </form>

<a href="." >Back to List</a>
</div>
<?php
include '../view/footer.php';
?>