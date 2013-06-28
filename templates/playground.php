<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../libs/ChunkFive/stylesheet.css" rel="stylesheet">
        <link href="../style.css" rel="stylesheet">
        <link rel="stylesheet" href="../libs/codemirror/lib/codemirror.css">

        <title><?= htmlspecialchars($title) ?></title>
    </head>
    <body>
        <div class="container header">
            <div class="row">
                <div class="span12">
                    <h1><a href="..">Websites Leren Maken</a></h1>
                    <div class="tagline">Een initiatief van <a href="http://www.djoe.nl/">Djoe</a></div>
                    <a href=".." class="btn btn-primary">« Terug</a>
                </div>
            </div>
        </div>
        <div class="vsplitter vfill" style="width: 100%; height: 100%;">
            <div>
                <h2><?= htmlspecialchars($title) ?></h2>

                <?= $html ?>
            </div>
            <div class="hsplitter">
                <div class="top pane editor"></div>
                <div class="bottom pane">bottompane</div>
            </div>
        </div>

        <script src="../libs/jquery/jquery-1.8.3.min.js"></script>
        <script src="../libs/splitter/jquery.cookie.js"></script>
        <script src="../libs/splitter/splitter.js"></script>
        <script src="../libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="../websiteslerenmaken.js"></script>
        <script src="../libs/codemirror/lib/codemirror.js"></script>
        <script src="../libs/codemirror/mode/xml/xml.js"></script>
        <script src="../libs/codemirror/mode/javascript/javascript.js"></script>
        <script src="../libs/codemirror/mode/css/css.js"></script>
        <script src="../libs/codemirror/mode/htmlmixed/htmlmixed.js"></script>

    </body>
</html>

