<?php session_start() ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body class="d-flex justify-content-center">
        <div class="container mt-5" style="width: 400px;">
            <h3>Login</h3>
            <form method="post" action="/proses/login.php" class="row g-3 needs-validation" novalidate>
                <div class="col-12">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" required>
                    <div class="invalid-feedback">
                        Isi NIM
                    </div>
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="invalid-feedback">
                        Isi Password
                    </div>
                </div>
                <div class="col-12">
                    <?php
                        if (isset($_SESSION['login_error'])) {
                            ?>
                        <div class="alert alert-warning" role="alert">
                            Username atau password salah.
                        </div>
                        <?php
                            unset($_SESSION['login_error']);
                        }
                    ?>
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
        <script src="form-validation.js"></script>
    </body>
</html>
