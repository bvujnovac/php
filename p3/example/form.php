<?php
$file = '/var/www/html/p3/example/prijave.json';
if (isset($_POST['name'])) {
    file_put_contents($file, json_encode($_POST, true), FILE_APPEND);
}
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
                        <li><a href="form.php">Prijavi se</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin.php"> Login (za admine)</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="container">

            <h1>Prijavnica za PHP akademiju</h1>

            <p>Prijavnica za prvo osječko izdanje PHP akademije koju Inchoo pokreće u suradnji s FERITom.</p>
            <p>Prijave traju do 10.10., pa požuri i svoje mjesto rezerviraj već sad.</p>
            <p>Više informacija na:
                <a href="http://inchoo.hr/php-akademija-2016/" target="_blank">http://inchoo.hr/php-akademija-2016/</a>
            </p>

            <!-- fix form -->
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Ime i prezime</label>
                    <input type="text" name="name" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Mail adresa</label>
                    <input type="email" name="email" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Smjer</label>
                    <input type="text" name="study" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Godina studija</label>
                    <select name="godina" class="form-control" required>
                        <option value="1">1.</option>
                        <option value="2">2.</option>
                        <option value="3">3.</option>
                    </select>

                    <div class="form-group">
                        <label>Što te motiviralo da se prijaviš?</label>
                        <textarea type="text" name="motiv" class="form-control" required></textarea> <!--close area right after open ends to eliminate whitespaces-->
                    </div>

                    <div class="form-group">
                        <label>Imaš li predznanje vezano uz web development?</label>
                        <textarea type="text" name="preknow" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>U kojim jezicima si do sada programirao?</label><br>
                        <label><input name="language[]" type="checkbox" value="C"/>C programski jezik</label>
                        <label><input name="language[]" type="checkbox" value="PHP"/>PHP</label>
                    </div>

                    <div class="form-group">
                        <label>Uploadaj primjer svoga koda:</label>
                        <input name="file" type="file">
                    </div>

                    <button type="submit" class="btn btn-default">Prijavi se</button>
            </form>
        </main>

        <footer class="footer">
            <p class="container">&copy; PHP Akademija, 2016 by Benjamin Vujnovac</p>
        </footer>

    </body>
</html>