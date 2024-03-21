<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The Area & Perimeter program, in PHP" />
    <meta name="keywords" content="mths, ics2o" />
    <meta name="author" content="Nathan De Silva" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>The Area & Perimeter program,in PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The math program, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/street.jpg" alt="street image" />
      </div>
      <div class="page-content">
        <?php echo '<p>6 + 5 = ' . (6 + 5) . '</p>'; ?>
        <?php echo '<p>7 - 3 =  ' . (7 - 3) . '</p>'; ?>
        <?php echo '<p>3 + 4 × 2 = ' . (3 + 4 * 2) . '</p>'; ?>
        <?php echo '<p>(4 ÷ 2) + 3 = ' . (4 / 2 + 3) . '</p>'; ?>
        <?php echo '<p>5 + 2³ = ' . (5 + 2 ** 3) . '</p>'; ?>
      </div>
      <br />
    </main>
    </div>
  </body>
</html>
