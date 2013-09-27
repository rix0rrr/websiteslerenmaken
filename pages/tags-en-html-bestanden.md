{{{
    "title":    "Tags en HTML-bestanden",
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

### Tags

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
* `<title>` gebruik je tussen `<head>` en `</head>` om je pagina een titel te
  geven (maar dat ga je in dit voorbeeld niet terugzien).

+++
Omdat de tekens `<` en `>` gebruikt worden bij het typen van *tags* snap je wel
dat als je echt een groter-dan of kleiner-dan teken wilt typen (zoals in:
"ik ben > mijn leraar!") je iets anders moet typen. Iets extra's typen om
karakters met een speciale betekenis normaal te laten verschijnen heet *escapen*,
en in HTML doe je dat met *character entities*. Die schrijf je als volgt: `&entity;`.

Zo kun je bijvoorbeeld `&copy;` typen voor ©, `&rarr;` voor →, en `&lt;` (*Less
Than*) en `&gt;` (*Greater Than*) voor < en > . Helaas is hierdoor het &-teken
ook weer speciaal geworden, dus als je dat wilt laten zien, typ je `&amp;`.

Op Wikipedia vind je [een lijst van alle character
entities](http://en.wikipedia.org/wiki/List_of_XML_and_HTML_character_entity_references).
+++

### Witruimte

Je hebt misschien ook al gemerkt dat een webbrowser niet op witruimte en
regeleindes let. Al je tekst verschijnt achter elkaar op één lange regel,
en pas aan de rechterkantlijn van het scherm begint de volgende regel. Je hebt daarom 
een paar tags nodig om aan te geven dat de browser stukken tekst uit elkaar moet
houden:

* `<p>` (*Paragraph*) betekent dat de tekst ertussen een paragraaf voorstelt.
  Paragrafen hebben een extra regel witruimte ertussen.
* `<br>` (*Line Break*) zorgt ervoor dat de regel waarop je aan het typen bent
  afgebroken wordt een op een nieuwe regel begint.
* `<hr>` (*Horizontal Rule*) zorgt voor een grote horizontale lijn op je pagina, 
  om hoofdstukken van elkaar te scheiden!

(`<br>` en `<hr>` tags hoef je trouwens niet te sluiten!)

Probeer in het tekstveld rechts de verschillende tags maar eens uit, en kijk
wat er gebeurt in het voorbeelscherm.
