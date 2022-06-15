<?php require($_SERVER['DOCUMENT_ROOT']."/scripts/config.php")?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Your Account - Share and Repair</title>
      <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
      <?php require($_SERVER['DOCUMENT_ROOT']."/scripts/css.php")?>
    </head>
    <body>
        <?php require($_SERVER['DOCUMENT_ROOT']."/src/misc/simple-header.php")
        require($_SERVER['DOCUMENT_ROOT']."/src/auth/register.php")
        require($_SERVER['DOCUMENT_ROOT']."/src/auth/login.php")?>
        <?php require($_SERVER['DOCUMENT_ROOT']."/src/misc/footer.php")?>
    </body>
    <footer>
        <?php require($_SERVER['DOCUMENT_ROOT']."/src/misc/footer.php")?>
    </footer>
</html>