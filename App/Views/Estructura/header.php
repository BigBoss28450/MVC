<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Usuarios</title>
        <link rel="stylesheet" href="<?=BASE_URL?>App/Assets/lib/bootstrap-4.4.1/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            var base_url = '<?= BASE_URL ?>';
        </script>
        <style>
            .container {
                padding-top: 20px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">Examen</a>
            <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a href="'.BASE_URL.'Home">Login</a>';
                } else {
                    echo '<a href="'.BASE_URL.'Session/logOut">Logout</a>';
                }
            ?>
        </nav>
