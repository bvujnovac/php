<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*$file = '/var/www/html/p3/example/prijave.json';
$data = file_get_contents($file);
$b = explode('}', $data);
$r = count($b);
unset($b[$r - 1]);
foreach ($b as $value) {
    $c = $value . "}";
    $a = json_decode($c, true);
    $u[] = $a;
}
var_dump($u);*/

//$temp_file = tempnam(sys_get_temp_dir(), 'Tux');

//echo $temp_file;
?>
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
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin.php">Odlogiraj me</a></li>
                    </ul>
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