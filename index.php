<?php

include "db\db.php";

// var_dump($songDB[0]["title"]);
// var_dump($songDB); die;
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ex-dischi-musicali</title>
        <link
      href="https://fonts.googleapis.com/css?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <header>
      <div class="container">
        <img src="logo.png" alt="logo" />
      </div>
    </header>

    <div class="select-container container">
      <h2>Select your genre</h2>
      <div class="genre-selector">
        <select name="genre-select" id="genre-select">
          <option value="all">All</option>
        </select>
      </div>

      <div class="cds-container container">

          <?php foreach($songDB as $song) { ?>
            <div class="cd">
                  <img src=<?php echo $song["poster"]?> alt=<?php echo $song["title"]." poster"?> />
                  <h3>
                    <?php echo $song["title"]?>
                  </h3>
                  <span class="author">
                    <?php echo $song["author"]?>
                  </span>
                  <span class="year">
                    <?php echo $song["year"]?>
                  </span>
            </div>
          <?php } ?>
        </div>



  </body>
</html>
