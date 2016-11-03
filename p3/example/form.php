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
        <title>Title</title>
        <style>
            input, textarea { display: block; }
        </style>
    </head>
    <body>

        <header>
            <ul>
                <li><a href="index.php">Naslovnica</a></li>
                <li><a href="form.php">Prijavi se</a></li>
                <li><a href="admin.php"> Login (za admine)</a></li>
            </ul>
        </header>

        <main>

            <h1>Prijavnica za PHP akademiju</h1>

            <p>Prijavnica za prvo osječko izdanje PHP akademije koju Inchoo pokreće u suradnji s FERITom.</p>
            <p>Prijave traju do 10.10., pa požuri i svoje mjesto rezerviraj već sad.</p>
            <p>Više informacija na:
                <a href="http://inchoo.hr/php-akademija-2016/" target="_blank">http://inchoo.hr/php-akademija-2016/</a>
            </p>

            <!-- fix form -->
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label>Ime i prezime</label>
                <input type="text" name="name"/>

                <label>Mail adresa</label>
                <input type="email" name="email"/>

                <label>Smjer</label>
                <input type="text" name="study"/>
                <br>

                <label>Godina studija</label>
                <select name="godina">
                    <option value="1">1.</option>
                    <option value="2">2.</option>
                    <option value="3">3.</option>
                </select>
                <br><br>

                <label>Što te motiviralo da se prijaviš?</label>
                <textarea type="text" name="motiv"></textarea> <!--close area right after open ends to eliminate whitespaces-->
                <br>

                <label>Imaš li predznanje vezano uz web development?</label>
                <textarea type="text" name="preknow"></textarea>
                <br>

                U kojim jezicima si do sada programirao?
                <label><input name="language[]" type="checkbox" value="C" />C programski jezik</label>
                <label><input name="language[]" type="checkbox" value="PHP"/>PHP</label>
                <br><br>

                Uploadaj primjer svoga koda:
                <input name="file" type="file">
                <br><br>
                <button type="submit">Prijavi se</button>
            </form>
        </main>

        <footer>
            <p>&copy; PHP Akademija, 2016</p>
        </footer>

    </body>
</html>