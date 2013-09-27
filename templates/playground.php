<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../libs/ChunkFive/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="../libs/codemirror/lib/codemirror.css">
        <link href="../style.css" rel="stylesheet">

        <title><?= htmlspecialchars($title) ?></title>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1><a href="..">Websites Leren Maken</a></h1>
                        <div class="tagline">Een initiatief van <a href="http://www.djoe.nl/">djoe</a></div>
                        <a href=".." class="btn btn-primary offset-left">« Home</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-split" id="h-split" style="width: 100%; position: absolute; top: 120px; bottom: 50px; overflow: hidden;">
            <div>
                <div class="uitleg">
                    <h2><?= htmlspecialchars($title) ?></h2>

                    <?= $html ?>
                </div>
            </div>
            <div class="v-split" id="v-split-r">
                <div class="top pane editor"><?= $meta->get('initial_html') ? htmlspecialchars(implode("\n", $meta->get('initial_html'))) : "" ?></div>
                <div class="bottom pane">
                    <iframe id="preview" class="preview-pane"></iframe>
                </div>
            </div>
        </div>
        <div class="buttonbar" style="width: 100%; position: absolute; height: 50px; bottom: 0px;">
            <div class="buttonbar-inner">
                <? if (has_prev($page_name)): ?>
                <a href="../page.php/<?= htmlspecialchars(prev_page($page_name)) ?>" class="btn btn-warning">« Vorige les</a>
                <? endif; ?>

                <a href="#" class="btn btn-success" id="download-button" style="position: absolute; left: 50%; margin-left: -7em; width: 14em;">▼ Deze Pagina Downloaden</a>

                <? if (has_next($page_name)): ?>
                <a href="../page.php/<?= htmlspecialchars(next_page($page_name)) ?>" class="btn btn-primary pull-right">Volgende les »</a>
                <? endif; ?>
            </div>
        </div>

        <script src="../libs/jquery/jquery-1.8.3.min.js"></script>
        <script src="../libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="../websiteslerenmaken.js"></script>
        <script src="../panes.js"></script>
        <script src="../libs/codemirror/lib/codemirror.js"></script>
        <script src="../libs/codemirror/mode/xml/xml.js"></script>
        <script src="../libs/codemirror/mode/javascript/javascript.js"></script>
        <script src="../libs/codemirror/mode/css/css.js"></script>
        <script src="../libs/codemirror/mode/htmlmixed/htmlmixed.js"></script>

    </body>
</html>

