<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-dischi-musicali</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <img src="img/logo.png" alt="logo" />
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
        </div>
    </div>

    <!-- TEMPLATE  -->
    <script id="cd-template" type="text/x-handlebars-template">
        <div class="cd" data-genre={{genre}}>
                <img src={{poster}} alt="">
                <h3>{{title}}</h3>
                <span class="author">{{author}} </span>
                <span class="year">{{year}}</span>
            </div>
          </script>

    <script src="script/app.js" charset="utf-8"></script>
</body>

</html>