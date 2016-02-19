<?php

include(MODELS_PATH."/{$_controller}.model.php");

function index(){
    global $_controller, $_action;

    $alias = isset($params['alias']) ? $params['alias'] : 'index';

    $data = array(
        'goods' => getGoodsList(),
    );

    $path = TEMPLATES_PATH."/{$_controller}/{$_action}.ctp";
    return renderTemplate($path, $data);
}