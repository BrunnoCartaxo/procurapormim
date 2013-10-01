<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LoginController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function esqueciSenhaAction()
    {
        return new ViewModel();
    }
}
