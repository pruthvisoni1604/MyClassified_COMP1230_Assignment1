<?php

$url = explode("/",$_SERVER['QUERY_STRING']);
$controller = is_null($url[0])?$url[0]:'profile';
$view = isset($url[1])?(is_null($url[1])?'index':$url[1]):'index';
$extra = isset($url[2])?(is_null($url[2])?'':$url[2]):'';

include 'app/controllers/'.$controller.'.php';
include 'app/views/'.$controller.'/'.$view.'.php';