<?php

define('FILE_PATH', 'fileDB/agendas.json');

function read_agendas() {
    if (! file_exists('fileDB')) {
        mkdir('fileDB');
    }
    if ( ! file_exists(FILE_PATH)) {
        global $fixture;
        write_agendas($fixture);
    }
    $result = json_decode(file_get_contents(FILE_PATH), true);
    return $result;
}

function write_agendas($content)
{
    file_put_contents(FILE_PATH, json_encode($content));
}
