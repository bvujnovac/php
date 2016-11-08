<?php
$file = '/var/www/html/p3/example/prijave.json';
if (isset($_POST['name'])) {
    file_put_contents($file, json_encode($_POST, true), FILE_APPEND);
}

if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
    $expensions = array("jpeg", "jpg", "png");

    /*  if (in_array($file_ext, $expensions) === false) {
      $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
      } */
    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "/var/www/html/p3/example/uploads/" . $file_name);
        $s = "Uspjeh";
    } else {
        $err = $errors;
    }
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
            <p><?php echo $s . ',' . ' ' . 'izvršili ste prijavu' ?></p>
            <p><?php print_r($err[0]); ?></p>
            <p><?php
                if ($s !== "Uspjeh") {
                    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
                }
                ?></p>

        </main>

        <footer class="footer">
            <p class="container">&copy; PHP Akademija, 2016</p>
        </footer>

    </body>
</html>