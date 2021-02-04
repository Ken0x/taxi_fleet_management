<?php

if (!defined('ABSPATH'))
    die('Restricted Access');

global $config_array;
$config_array = JSVEHICLEMANAGERincluder::getJSModel('configuration')->getConfigByFor('topmenu');


function jsvehiclemanagerchecktopmenuLink($name) {
    $print = false;
    $visname = 'vis_'.$name;
    $isguest = JSVEHICLEMANAGERincluder::getObjectClass('user')->isguest();

    global $config_array;

    if ($isguest == false) {
        if (isset($config_array[$name]) && $config_array[$name] == 1)
            $print = true;
    } else {
        if (isset($config_array["$visname"]) && $config_array["$visname"] == 1)
            $print = true;
    }
    return $print;
}
$div = '';
    if( jsvehiclemanagerchecktopmenuLink('topmenu_controlpanel') == true ){
        $linkarray[] = array(
            'link' => jsvehiclemanager::makeUrl(array('jsvmme'=>'user', 'jsvmlt'=>'dashboard')),
            'title' => __('Control Panel', 'js-vehicle-manager'),
        );
    }
    if( jsvehiclemanagerchecktopmenuLink('topmenu_vehiclelist') == true ){
        $linkarray[] = array(
            'link' => jsvehiclemanager::makeUrl(array('jsvmme'=>'vehicle', 'jsvmlt'=>'vehicles')),
            'title' => __('Vehicle List', 'js-vehicle-manager'),
        );
    }
    if( jsvehiclemanagerchecktopmenuLink('topmenu_sellerlist') == true ){
        $linkarray[] = array(
            'link' => jsvehiclemanager::makeUrl(array('jsvmme'=>'user', 'jsvmlt'=>'sellerlist')),
            'title' => __('Driver List', 'js-vehicle-manager'),
        );
    }

if (isset($linkarray)) {
    $div .= '<div id="jsvehiclemanager-header-main-wrapper">';
    foreach ($linkarray AS $link) {
        $div .= '<a class="headerlinks" href="' . $link['link'] . '">' . $link['title'] . '</a>';
    }
    $div .= '</div>';
}
echo $div;
?>
