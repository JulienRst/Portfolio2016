<?php

    require_once('model/routing.php');

    $routing = new ROUTING();

    $route = $routing->getRoute();

    $root = $routing->getRoot().'Portfolio2016/';
    // ISSUES : DELETE THE LINE OVER WHEN PUSH ON SERVER.
    //$root = $routing->getRoot();
    $parameter = $routing->getParameter();
    include($route);

?>
