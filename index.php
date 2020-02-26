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

      </div>
    </main>
    <footer>

    </footer>
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="box">
        <img src="{{{poster}}}" alt="{{{title}}}">
        <h5>{{title}}</h5>
        <h6>{{author}}</h6>
        <p>{{year}}</p>
      </div>
    </script>
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
