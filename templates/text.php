<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../libs/ChunkFive/stylesheet.css" rel="stylesheet">
        <link href="../style.css" rel="stylesheet">

        <title><?= htmlspecialchars($title) ?></title>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1><a href="..">Websites Leren Maken</a></h1>
                        <div class="tagline">Een initiatief van <a href="http://www.djoe.nl/">Djoe</a></div>
                        <div><a href=".." class="btn btn-primary offset-left">« Home</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="span10">
                    <h2><?= htmlspecialchars($title) ?></h2>

                    <?= $html ?>
                </div>
            </div>
        </div>

        <script src="../libs/jquery/jquery-1.8.3.min.js"></script>
        <script src="../libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="../websiteslerenmaken.js"></script>
    </body>
</html>

