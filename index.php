<?php
include_once "./views/inc/header.php";
require_once "./models/functions.php";
// $listFilm = filmlist();
?>

<div class="container d-flex flex-wrap">
    <?php foreach ($listfilm as $film) { ?>
        <div class="card" style="width: 18rem;">
            <div class="">
                <img src="assets/imgs/<?= $film['film_imgs'] ?>" class="card-img-top" alt="image">
            </div>
            <div class="card-body">
                <p class="card-text"><?= $film['price']; ?> $/nuit</p>
                <p class="card-text"><?= $film['category']; ?></p>
                <p class="card-text"><?= $film['persons']; ?>Persons</p>
                <a class="btn btn-danger" href="booking.php?room=<?= $film['id_room']; ?> &price=<?= $film['price'] ?>">Book this Film</a>
            </div>
        </div>
    <?php } ?>
</div>

<?php include_once "inc/footer.php"; ?>