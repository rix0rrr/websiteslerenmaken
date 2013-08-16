{{{
    "title":    "Tags en HTML bestanden",
    "template": "playground",
    "initial_html": ["<html>",
                     "  <head>",
                     "  </head>",
                     "  <body>",
                     "",
                     "      Een webpagina bestaat uit TAGS.",
                     "      <p>Tags geven aan dat er iets speciaals moet gebeuren",
                     "      met de tekst die ertussen staat, zoals bijvoorbeeld",
                     "      <b>vet</b> maken of <i>scheef</i> drukken.",
                     "",
                     "      <h1>Ook kun je koppen maken</h1>",
                     "      Dat is handig om grote blokken tekst overzichtelijk te houden.",
                     "",
                     "  </body>",
                     "</html>"]
}}}

Webpagina's zijn geschreven in een soort van programmeertaal, die
HTML heet. 

+++
HTML staat voor *HyperText Markup Language*. HyperText is de wetenschappelijke
naam voor wat wij allemaal kennen als het WereldWijde Web: wetenschappers zagen een
wereld voor zich waarin alle kennis van de wereld zou worden opgeschreven in
pagina's die met elkaar verbonden waren via *hyperlinks*. Het voordeel hiervan
is dat je niet simpelweg van vóór naar achter hoeft te lezen, zoals in een
boek, maar dat je direct door kunt klikken naar wat je interessant vindt.
Daarom noemden ze het HYPER text.

*Markup Language* slaat er op je eigenlijk gewoon je document typt, en af
en toe door codes toe te voegen stukken van je document speciaal maakt.
+++

HTML bestanden bestaan uit twee dingen: gewone tekst (die je op je scherm terug
kan lezen), en zogenaamde *tags*. Tags zijn speciale instructies voor je
webbrowser. Tags worden geschreven als gebroken haken, met daartussen een
letter of korte naam, zoals `<p>`, `<a>` of `<body>`. De meeste tags
hebben tekst in zich, en veranderen dan de betekenis van die tekst.
Je zet de tag dan om je tekst heen, en zet een schuine streep `/` voor de
naam om aan te geven dat het een sluittag is. Bijvoorbeeld `<i>zoals dit</i>`.

Sommige tags hebben geen tekst in zich, zoals `<br>`, wat zorgt voor een *line
BReak* op die plek.

Hieronder vind je een lijstje van veelgebruikte tags. Probeer ze maar eens uit
in het veld hiernaast en kijk wat er gebeurt met je webpagina (Let op dat alle
*inhoud* van je webpagina moet staan tussen de `<body>...</body>` tags.  Het
deel tussen `<head>` is gereserveerd voor extra instructies voor je webbrowser
— daar gaan we het later over hebben).

Lijst van veelgebruikte tags:

* `<h1>`, `<h2>`, `<h3>` (*Heading*) deze tags maken de tekst die ertussen staat tot een
kop, dus groot en lekker opvallend. De lijst gaat door tot `<h6>`.
* `<b>` (*Bold*) maakt je tekst vet
* `<i>` (*Italic*) maakt je test cursief
* `<u>` (*Underline*) onderstreept je tekst
* `<p>` (*Paragraph*) betekent dat de tekst ertussen een paragraaf. 

+++
Speciale karakters escapen &lt; enzo
+++

Een webbrowser let niet op.

+++
Em vs i
Strong vs b
+++
