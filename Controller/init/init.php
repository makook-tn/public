<?php 
include '../Modeles/autoloader.php';
$setting=new Setting('setting');
$settings=$setting->getData();
//var_dump($settings);
$urlname=$settings['0']['urlname'];
define("ROOT", $urlname);


