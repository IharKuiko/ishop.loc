<?php

namespace app\controllers;

use wfm\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
//        $this->layout = 'test';
        $this->setMeta('<h1>Main page</h1>>', 'Description', 'keywords');
        $this->set(['test' => 'TEST VAR']);
    }
}