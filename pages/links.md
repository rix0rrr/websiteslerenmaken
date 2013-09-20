{{{
    "title":    "Links",
    "template": "playground",
    "initial_html": ["<html>",
                     "  <head>",
                     "  </head>",
                     "  <body>",
                     "",
                     "      Maak hier maar eens een link naar djoe.nl!",
                     "",
                     "  </body>",
                     "</html>"]
}}}

Hyperlinks zijn de belangrijkste tags van het web. Iedereen kent ze: het zijn
de [blauwe, soms onderlijnde woorden](#) waar je op kan klikken om naar een
andere pagina te gaan.

Links verbinden verschillende pagina's binnen één site, en sites onderling.

Een link maak je met de tag `<a>`, wat staat voor *anchor*. Maar een `<a>`
alleen is nog niet genoeg: je moet de computer ook nog vertellen waar de link
*naartoe* moet wijzen. Dit doe je door een *attribuut* toe toe voegen. Het doel
van een hyperlink kun je aangeven met een `href="..."` attribuut, en daarin zet
je het adres de webpagina waar je bezoekers naartoe wilt sturen als ze op de
link klikken:

    <a href="http://www.djoe.nl">Klik hier om naar djoe.nl te gaan!</a>

(Om de waarde van een attribuut horen altijd dubbele aanhalingstekens te staan.
Een browser *snapt* het vaak ook wel als je die weglaat, maar ze horen er wel te
staan. Probeer het goed te doen!)

++++
De officiële naam van een webadres is URL. Dat staat voor *Uniform Resource
Locator*, en is de manier om alle bestanden op het web aan te duiden. Een volledig URL
bestaat (meestal) uit de volgende delen:

    protocol :// hostnaam /pad/naar/bestand.html

`protocol` is `http` of `https` (`https` is voor een beveiligde verbinding),
`hostnaam` is de naam van de computer waar de webpagina op staat (meestal een
`.com` of `.nl` adres), en `/pad/naar/bestand.html` geeft aan waar het bestand
op die computer gevonden kan worden.

Als een URL al deze onderdelen bevat, is het een *absoluut* URL. Als er
onderdelen ontbreken, is het een *relatief* URL, en is zijn betekenis
afhankelijk van het adres van de webpagina waarop hij staat. Bijvoorbeeld:

    <a href="help.html">

Is een link naar een bestand genaamd `help.html` in dezelfde directory als de
huidige webpagina, en:

    <a href="../welkom.html">

Is een link naar `welkom.html` in een directory hoger.

Relatieve links kunnen handig zijn als je je website wilt verplaatsen
(bijvoorbeeld van `www.gratis.nl/mijnsite` naar `mijnsite.nl`. Als je absolute
URLs gebruikt, moet je die allemaal vervangen, terwijl als je relatieve URLs
gebruikt hebt, hoef je niets te doen!
++++

Probeer in het vak hiernaast maar eens een paar links te maken!

### Lijsten

Links komen in lopende tekst voor, maar ook vaak in lijstjes en menus. Lijstjes
maak je met `<ul>` voor een lijst met bullets (*unordered list*), `<ol>` voor
een lijst met nummers (*ordered list*), en dan `<li>...</li>` (*list item*)
voor elke regel in de lijst:

    <ul>
        <li>dit</li>
        <li>is</li>
        <li>een</li>
        <li>bulleted</li>
        <li>list</li>
    </ul>

    <ol>
        <li>deze</li>
        <li>lijst</li>
        <li>is</li>
        <li>genummerd</li>
    </ol>

Probeer hiernaast maar eens een lijstje van links te maken!

### Openen in een nieuw venster

Iedere tag heeft kan attributen hebben, om zijn gedrag te veranderen. Hier vind
je bijvoorbeeld [alle attributen van de a tag](http://devdocs.io/html/a).

Een andere interessant attribuut van de `<a>` tag is `target="_blank"`. Hiermee
kun je de gelinkte webpagina automatisch in een nieuwe pagina of tabblad laten
openen.
