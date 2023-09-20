<?php
require_once "../views/inc/database.php";
if (isset($_POST['add_film'])) {
    // recuperation des infos
    $title = htmlspecialchars($_POST['title']);
    $numbermainactors = htmlspecialchars($_POST['number_main_actors']);
    $numbertotelactors = htmlspecialchars($_POST['number_total_actors']);
    // se connecter a la base de donnees
    $db = dbConnexion();
    // preparer la requete 
    $request = $db->prepare("INSERT INTO film (title, number_main_actors, number_total_actors) VALUES (?, ?, ?)");
    // executer la requete
    try {
        $request->execute(array($title, $numbermainactors, $numbertotelactors));
        header("http://localhost/best_movies/views/list_film.php");
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
