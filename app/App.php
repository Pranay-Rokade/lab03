<?php
namespace Company\Utility;
use Company\Utility\Controller\MainController;

Class App{
    public static function init(){
        $controller = new MainController();
        $controller->show();
    }
}