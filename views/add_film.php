<?php
include_once "../views/inc/header.php";
?>

<head>
    <title>Ajouter un film</title>
</head>

<body>

    <h1>Ajouter un film</h1>
    <div class="container">
        <form action="../models/filmModel.php" method="post">
            <div class="form-group">
                <label>Titre du film:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label>Main Actors:</label>
                <input type="text" class="form-control" id="number_main_actors" name="number_main_actors">
            </div>

            <div class="form-group">
                <label>Total Actors:</label>
                <input type="number" class="form-control" id="number_total_actors" name="number_total_actors">
            </div>

                <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_film" value="submit">Submit</button>
            </form>
        </form>
    </div>

    <?php
    include_once "../views/inc/footer.php";

    ?>