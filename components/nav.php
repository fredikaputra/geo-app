<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">GEO APP</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= $_SERVER['REQUEST_URI'] === '/list/user.php' ? 'active' : '' ?>" href="/list/user.php">User</a>
                </li>
            </ul>
        </div>
        <form action="/proses/auth/logout.php" method="post">
            <button type="submit" class="btn btn-secondary ms-auto">Logout</button>
        </form>
    </div>
</nav>
