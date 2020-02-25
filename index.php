<?php include  __DIR__ . '/src/Partials/server.php';?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <header>
      <nav class="nav_bar">
        <img src="https://developer.spotify.com/assets/branding-guidelines/icon3@2x.png" alt="Spotify LOGO">
      </nav>
    </header>
    <main>
      <div class="d-flex container">
        <?php foreach ($database as $disk) { ?>
          <div class="box">
            <img src="<?php echo $disk['poster'] ?>" alt="">
            <h5><?php echo $disk['title'] ?></h5>
            <h6><?php echo $disk['author'] ?></h6>
            <p><?php echo $disk['year'] ?></p>
          </div>
        <?php } ?>
      </div>
    </main>
    <footer>

    </footer>
  </body>
</html>
