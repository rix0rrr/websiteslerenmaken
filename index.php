<? include "chapters.php" ?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="libs/ChunkFive/stylesheet.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

        <title>Websites Leren Maken</title>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1><a href="/">Websites Leren Maken</a></h1>
                        <div class="tagline">Een initiatief van <a href="http://www.djoe.nl/">djoe</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <br>
            </div>

            <div class="row">
                <div class="span8">
                    <p>Wil je zelf een website maken? Op deze site leggen we je
                    precies uit hoe dat werkt!</p>

                    <a href="page.php/hoe-werkt-deze-site" class="btn btn-success btn-large">Beginnen!</a>
                    (<a href="page.php/waarom">Waarom wil ik dit leren?</a>)
                </div>
            </div>

            <div class="row">
                <div class="span8">

                    <h2>Basis</h2>

                    <ol>
                        <?= render_links($basic) ?>
                    </ol>

                    <h2>Gevorderd</h2>

                    <ol>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Tekenen op Canvas</a></li>
                        <li><a href="#">Animatie</a></li>
                        <li><a href="#">PHP</a></li>
                    </ol>
                </div>

                <div class="span4">
                    <h2>Nuttige Links</h2>

                    <p>Hieronder vind je een lijstje van nuttige links die
                    je van pas kunnen komen bij het maken van websites.</p>

                    <ul>
                        <li><a href="http://devdocs.io/html/">devdocs.io</a>
                        Compleet overzicht van HTML tags en CSS attributen.</li>
                        <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference">
                        Mozilla CSS reference</a></li>
                        <li><a
                        href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference">Mozilla
                        JavaScript reference</a></li>
                    </ul>

                    <h2>Andere Sites</h2>

                    <p>Hier zijn nog meer sites waar je iets van kan leren:</p>

                    <ul>
                        <li><a href="http://www.codecademy.com">Codecademy</a> Een Engelse
                        site waar je HTML en JavaScript kan leren</li>
                        <li><a href="http://www.fullstack.io/choc/">Choc</a> Zie het resultaat
                        van je wijzigingen <em>terwijl</em> je nog aan het programmeren bent!</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <script src="libs/jquery/jquery-1.8.3.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
