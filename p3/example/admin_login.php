<?php ?>
<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <title>PHP Akademija</title>
    </head>
    <body>
        <header>
            <nav class="nav navbar-default">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Naslovnica</a></li>
                </div>
            </nav>
        </header>

        <main class="container">
            <form method="post">

                <label for="username">Username</label>
                <input type="text" id="username" name="username" required />

                <label for="password">Password</label>
                <input type="text" id="password" name="password" required />

                <label for="remember-me">Remember me</label>
                <input id="remember-me" name="remember-me" type="checkbox" />

                <button type="submit">Login</button>

            </form>

        </main>

        <footer class="footer">
            <p class="container">&copy; PHP Akademija, 2016</p>
        </footer>

    </body>
</html>