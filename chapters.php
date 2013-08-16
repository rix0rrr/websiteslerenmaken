<?

// Chapter definitions
$basic = array(
    array("hoe-werkt-deze-site", "Hoe werkt deze site?"),
    array("tags-en-html-bestanden", "Tags en HTML bestanden"),
    array("links", "Links"),
    array("plaatjes", "Plaatjes"),
    array("stijlen-en-kleuren-met-css", "Stijlen en kleuren met CSS"),
    array("layouts", "Layouts"),
    array("problemen-met-layouts-oplossen", "Problemen met layouts oplossen"),
    array("een-menubalk-maken", "Een menubalk maken"),
    array("meer-dan-een-pagina", "Een site met meer dan één pagina"),
    array("je-site-online-zetten", "Je site online zetten")
);

function render_links($list, $dir=".") {
    $ret = array();

    foreach ($list as $line) {
        $ret[] = sprintf('<li><a href="%s/page.php/%s">%s</a></li>', $dir, htmlspecialchars($line[0]), htmlspecialchars($line[1]));
    }

    return implode("\r\n", $ret);
}

function find_index($item) {
    global $basic;
    for ($i = 0; $i < count($basic); $i++) {
        if ($basic[$i][0] == $item) return $i;
    }
    return -1;
}

function has_prev($item) {
    return find_index($item) > 0;
}

function has_next($item) {
    global $basic;
    return find_index($item) < count($basic) - 1;
}

function prev_page($item) {
    global $basic;
    return $basic[find_index($item) - 1][0];
}

function next_page($item) {
    global $basic;
    return $basic[find_index($item) + 1][0];
}

?>
