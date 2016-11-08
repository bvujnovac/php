<?php
//ini_set('session.gc_maxlifetime', 1*60); // expires in 30 minutes
session_start();

if (isset($_POST['username']) && $_POST['username'] == 'student' &&
        isset($_POST['password']) && $_POST['password'] == 'phpakademija'
) {
    $_SESSION['is_logged_in'] = true;
    header('Location: /p3/example/admin.php');
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$file = '/var/www/html/p3/example/prijave.json';
$data = file_get_contents($file);
$b = explode('}', $data);
$r = count($b);
unset($b[$r - 1]);
foreach ($b as $value) {
    $c = $value . "}";
    $a = json_decode($c, true);
    $u[] = $a;
}
//var_dump($u);
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
        <header class="modal-header">
            <nav class="nav navbar-default">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Naslovnica</a></li>
                    </ul>
                    <?php
                    if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
                        echo '<ul class = "nav navbar-nav navbar-right">
                        <li><a href = "/p3/example/logout.php">Odlogiraj me</a></li>
                        </ul>';
                    }
                    ?>
                </div>
            </nav>
        </header>

        <main class="container">

            <?php
            if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']): {
                    $br = count($u);
                    echo '<div class="table-responsive"><table class="table table-bordered"><tr><th>Kandidat</th><th>Email adresa</th><th>Studij</th><th>Godina studija</th></tr>';
                    for ($i = 0; $i <= $br; $i++) {
                        echo '<tr><td>' . $u[$i]['name'] . '</td>' . '<td>' . $u[$i]['email'] . '</td>' . '<td>' . $u[$i]['study'] . '</td>' . '<td>' . $u[$i]['godina'] . '</td></tr>';
                    }
                    echo '</table></div>';
                }
                ?>

            <?php else: ?>
                <form method="post">
                    <div class="panel-body">
                        <div class="input-group">
                            <span class="glyphicon glyphicon-user"></span>
                            <input type="text" id="username" name="username" placeholder="username(student)" class="form-control" required />
                        </div>

                        <div class="input-group">
                            <span class="glyphicon glyphicon-lock"></span>
                            <input type="text" id="password" name="password" placeholder="password(phpakademija)" class="form-control" required />
                        </div>

                        <div cclass="input-group">
                            <label for="remember-me">Remember me</label>
                            <input id="remember-me" name="remember-me" type="checkbox" />
                        </div>
                        <div class="b">

                            <button type="submit" class="btn btn-default">Login</button>
                        </div>
                </form>
            </div>
        <?php endif ?>
    </main>

    <footer class="footer">
        <p class="container">&copy; PHP Akademija, 2016 by Benjamin Vujnovac</p>
    </footer>

</body>
</html>