<?php
namespace phpMyEngine\cpauthController;

use phpMyEngine;
use phpMyEngine\Route;
use phpMyEngine\Config\Config;
use phpMyEngine\Render\Render;
use phpMyEngine\ControlPanel;

function defaultAction () {
    $_myRender = Render::getInstance();
    $login = $password = null;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (true === ControlPanel\doAuth ( \filter_input ( INPUT_POST, 'login' ), \filter_input ( INPUT_POST, 'password' ) )) {
            $_myConfig = \phpMyEngine\Config\Config::getInstance();
            \phpMyEngine\doRedirect ( $_myConfig->engine->controlPanel->URI );
        } else {
            $login = \filter_input ( INPUT_POST, 'login' );
            $_myMessages = new \phpMyEngine\Messages();
            $_myMessages->addError ( _ ( 'Incorrect login or password' ) );
            $_myRender->setValue ( '_messages', $_myMessages );
        }
    }
    $_myRender->setValue ( 'cplogin', $login );
    $_myRender->renderTemplate ( 'cpauth.tpl' );
    return null;
}

function authAction () {
    self::defaultAction();
}

function quitAction () {
    ControlPanel\doQuit();
    $_myConfig = \phpMyEngine\Config\Config::getInstance();
    \phpMyEngine\doRedirect ( $_myConfig->engine->controlPanel->URI );
}
