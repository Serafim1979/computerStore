<?php


namespace app\controllers;


use myStore\base\Controller;
use myStore\Cache;

class MainController extends AppController
{
    public function indexAction(){
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
    }
}