<?php
include 'includes/class-autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test technique Kerpape</title>
    <!-- Bootstrap core css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- JQuery core JavaScript -->
    <script src="assets/js/jquery.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- FontAwesome core css -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
          integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" type="text/css"
          href="./node_modules/tooltipster/dist/css/tooltipster.bundle.min.css"/>
    <script type="text/javascript"
            src="./node_modules/tooltipster/dist/js/tooltipster.bundle.min.js"></script>
</head>

<body>
    <?php $fetchObj = new FetchRecords(); ?>

    <div class="container py-5">
        <form action="index.php">
            <div class="row pt-4">
                <div class="col-2">
                    <input class="form-control shadow-sm border-0" type="text"
                           id="search_lastname"
                           name="search_lastname" placeholder="Nom">
                </div>

                <div class="col-2">
                    <input class="form-control shadow-sm border-0" type="text"
                           id="search_firstname"
                           name="search_firstname" placeholder="Prénom">
                </div>

                <div class="col-2">
                    <input class="form-control shadow-sm border-0" type="text"
                           id="search_city" name="search_city"
                           placeholder="Ville">
                </div>

                <div class="col-2">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <label for="inlineFormInputGroup"
                                   class="input-group-text shadow-sm border-0">Présent</label>
                        </div>

                        <select class="form-select form-select-md mb-3 shadow-sm border-0"
                                aria-label=".form-select-lg example"
                                name="presence" id="presence"
                                onchange="getOptionValue(this.value)">
                            <option></option>
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="result"></div>

    <table class="table table-hover table-idle container">
        <thead class="table-dark">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Arrivée</th>
            <th>Départ</th>
            <th>Présent</th>
        </tr>
        </thead>
        <tbody>
        <!-- Fetch all patients from database -->
        <?= $fetchObj->getPatients(); ?>
        </tbody>
    </table>

<!-- Custom JavaScript (ajax calls for filtering data) -->
<script src="assets/js/script.js"></script>
</body>

</html>