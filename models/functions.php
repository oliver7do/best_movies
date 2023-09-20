<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/php2023/HOTEL/inc/database.php";
// se connecter a la db (data base) ou bd (base de donnees)

function filmList()
{
    // se connecter a la db 
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM film");
    // executer la requete
    try {
        $request->execute();
        // recuperer le resultat dans un tableau
        return $listfilm = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function actorList()
{
    // se connecter a la db 
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM actor");
    // executer la requete
    try {
        $request->execute();
        // recuperer le resultat dans un tableau
        return $listactor = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $listactor;
}

function userBookList($idUser)
{
    // se connecter a la db 
    $db = dbConnexion();
    // preparer la requete
    // $request = $db->prepare("SELECT * FROM bookings WHERE user_id = ? AND booking_state = ?");
    $request = $db->prepare("SELECT id_booking, booking_start_date, booking_end_date, booking_state, booking_price, sum(booking_price) as prix, user_id FROM bookings WHERE user_id = ? AND booking_state = ? GROUP BY id_booking");
    // executer la requete
    try {
        $request->execute(array($idUser, 'in progress'));
        // recuperer le resultat dans un tableau
        return $userBookList = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $userBookList;
}
