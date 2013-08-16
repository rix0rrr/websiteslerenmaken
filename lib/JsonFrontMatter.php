<?php

class JsonFrontMatter {
    private $body;
    private $content;
    private $meta;

    public function __construct($body) {
        $this->body = $body;
    }

    public function parse() {
        if (preg_match("|{{{(.*)}}}(.*)$|s", $this->body, $matches)) {
            $json = '{' . $matches[1] . '}';
            $this->meta    = json_decode($json, true);
            if (!$this->meta) exit("Error parsing " . $json . ". Checklist: double quotes, commas, ...");
            $this->content = trim($matches[2]);
        }
        else {
            // Couldn't parse anything
            $this->meta    = array();
            $this->content = $this->body;
        }

    }

    public function meta() {
        return $this->meta;
    }

    public function get($key, $def='') {
        if (isset($this->meta[$key]))
            return $this->meta[$key];
        else
            return $def;
    }

    public function content() {
        return $this->content;
    }


}
