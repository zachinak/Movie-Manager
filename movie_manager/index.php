<?php
require('../model/database.php');
require('../model/movie_db.php');



if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'movie_list';
//......here you will have the default action
}

// READ functions
if ($action == 'movie_list') {
    $movies = getMovies();
    include('movie_list.php');

}
else if ($action == 'display_movie') {
    $movie_id = $_POST['movie_id'];
    $movie = getMovie($movie_id);
    include('movie_display.php'); // Currently, adding and updating functions are in two different php files
}

// CREATE function
else if ($action == 'add_movie') {
    if (empty($_POST['title']) || empty($_POST['released']) || empty($_POST['director']) || empty($_POST['runtime'])
        || empty($_POST['genre'])) {
        include('movie_add.php');
    } else {
        addMovie($_POST['title'],$_POST['released'],$_POST['director'],$_POST['runtime'],$_POST['genre']);
        $movies = getMovies();
        include('movie_list.php');
    }
}

// UPDATE function
else if ($action == 'update_movie') {

    updateMovie($_POST['movie_id'], $_POST['title'],$_POST['released'],
            $_POST['director'],$_POST['runtime'],$_POST['genre']);

        $movies = getMovies();
        include('movie_list.php');
}

// DELETE function
else if ($action == 'delete_movie') {
    $movie_id = filter_input(INPUT_POST, 'movie_id');
    if ($movie_id == NULL || $movie_id == FALSE) {
        $error = "Missing or incorrect movie id.";
        include('../errors/error.php');
    } else {
        deleteMovie($movie_id);
        header("Location: .");
    }

}
//add so on, series of else if ($action == '----'){ } conditions
?>