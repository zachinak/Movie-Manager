<?php
include '../view/header.php';
?>
    <div id="main">
        <h2>Movies</h2>
        <div id="content">
            <table>
                <tr>
                    <th>Title</th>
                    <th>Year</th>
                    <th>Director</th>
                    <th>Length (Minutes)</th>
                    <th>Genre</th>
                    <th colspan="2">Actions</th>
                </tr>
                <?php foreach ($movies as $movie) : ?>
                    <tr>
                        <td><?php echo $movie['title']; ?></td>
                        <td><?php echo $movie['released']; ?></td>
                        <td><?php echo $movie['director']; ?></td>
                        <td><?php echo $movie['runtime']; ?></td>
                        <td><?php echo $movie['genre']; ?></td>
                        <td>
                            <form action="." method="post">
                                <input type="hidden" name="action" value="display_movie"/>
                                <input type="hidden" name="movie_id" value="<?php echo $movie['id']; ?>"/>
                                <input type="submit" value="Edit"/>
                            </form>
                        </td>
                        <td>
                            <form action="." method="post">
                                <input type="hidden" name="action" value="delete_movie"/>
                                <input type="hidden" name="movie_id" value="<?php echo $movie['id']; ?>"/>
                                <input type="submit" onclick="return confirm('Are you sure, you want to delete this member?');" value="Delete"/>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <form action="." method="post">
                <input type="hidden" name="action" value="add_movie"/>
                <input type="submit" value="Add Movie"/>
            </form>
        </div>
    </div>
<!-- Add HTML and PHP code here to display the list of objects in table -->



<?php
include '../view/footer.php';?>