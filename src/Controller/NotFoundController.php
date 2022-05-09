<?php
namespace Tlait\Unlock\Controller;

class NotFoundController extends BaseController{
    public function notFoundAction():string{
        return $this->view("notFound.html",[]);
    }
}