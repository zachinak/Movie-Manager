<?php
//Write different functions to add, edit, update and delete your object.

function getMovies() {
    global $db;
    $query = 'SELECT * FROM movies
              ORDER BY released';
    $movies = $db->query($query);
    return $movies;
}

function getMovie($movie_id) {
    global $db;
    $query = "SELECT * FROM movies
              WHERE id = '$movie_id'";
    $movie = $db->query($query);
    $movie = $movie->fetch();
    return $movie;
}

function addMovie($title, $released, $director, $runtime, $genre) {
    global $db;
    $query = "INSERT INTO movies
                 (title, released, director, runtime, genre)
              VALUES
                 ('$title', '$released',
                  '$director', '$runtime', '$genre')";
    $db->exec($query);
}

function updateMovie($movie_id, $title, $released, $director, $runtime, $genre) {
    global $db;
    $query = "UPDATE movies
              SET title = '$title',
                  released = '$released',
                  director = '$director',
                  runtime = '$runtime',
                  genre = '$genre'
              WHERE id = '$movie_id'";
    $db->exec($query);
}

function deleteMovie($movie_id) {
    global $db;
    $query = "DELETE FROM movies
              WHERE id = '$movie_id'";
    $db->exec($query);
}