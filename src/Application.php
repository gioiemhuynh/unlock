<?php

namespace Tlait\Unlock;

use Tlait\Unlock\Controller\HomeController;
use Tlait\Unlock\Controller\NotFoundController;

class Application
{
    /*
     *@var HomeController
     */
    protected HomeController $homeController;
    /*
     * @var NotFoundController
     */
    protected NotFoundController $notFoundController;
    /*
     * @var string
     */
    protected string $requestMethod;
    /*
     * var string
     */
    protected string $requestUri;

    /*
     * @param HomeController $homeController
     * @param NotFoundController $notFoundAction
     */
    public function __construct(HomeController $homeController, NotFoundController $notFoundController)
    {
        $this->homeController = $homeController;
        $this->notFoundController = $notFoundController;
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestUri = $_SERVER['REQUEST_URI'];
    }

    /*
     *@return void
     */
    public function start()
    {
        $request = $this->requestMethod . ":" . $this->requestUri;
        switch ($request) {
            case 'GET:/':
                $response = $this->homeController->indexAction();
                break;
            default:
                $response = $this->notFoundController->notFoundAction();
        }
        echo $response;
    }
}
