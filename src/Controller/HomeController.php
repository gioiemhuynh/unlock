<?php

namespace Tlait\Unlock\Controller;

class HomeController extends BaseController
{
    /*
     * @return string
     */
    public function indexAction(): string
    {
        return $this->view('index.html', [
            'data' => 'Hello from index aciton'
        ]);
    }
}

