<?php

include(MODELS_PATH."/{$_controller}.model.php");

function index($params){
    global $_controller, $_action;

    $alias = isset($params['alias']) ? $params['alias'] : 'index';

    $data = array(
        'content' => getPageTextByAlias($alias),
    );

    $path = TEMPLATES_PATH."/{$_controller}/{$_action}.ctp";
    return renderTemplate($path, $data);
}

function show($params){
    global $_controller, $_action;

    $alias = isset($params['alias']) ? $params['alias'] : 'index';

    $data = array(
        'content' => getPageTextByAlias($alias),
    );

    $path = TEMPLATES_PATH."/{$_controller}/{$_action}.ctp";
    return renderTemplate($path, $data);
}

function contact_us($params){
    global $_controller, $_action;

    $path = TEMPLATES_PATH."/{$_controller}/{$_action}.ctp";
    return renderTemplate($path);
}