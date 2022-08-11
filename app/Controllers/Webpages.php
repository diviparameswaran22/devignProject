<?php namespace App\Controllers;

class Webpages extends BaseController
{

    public function index(){
       // echo view('some_view');
       echo view('test');
    }

    private function _setRenderSection($viewRenderer, $sectionName , $viewName, $data = []) {
        $viewRenderer->section($sectionName);
        echo view($viewName, $data);
        $viewRenderer->endSection($sectionName);
    }

    public function about()
    {
        $view = \Config\Services::renderer();

        $view->setVar('output', 'Hello World!');

        $this->_setRenderSection($view, 'sidebar' ,'my-view', ['data' => '123']);

        return $view->render('my-main-view');
    }
}