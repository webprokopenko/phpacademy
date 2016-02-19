<?php

function renderTemplate($path, $data = array()){

    if ( !file_exists($path) ){
        return false;
    }

    ob_start();
    include($path);
    $html = ob_get_clean();

    return $html;
}