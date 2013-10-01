<?php

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use User\Form\EsqueciSenhaForm;
use User\Form\CriarContaForm;


class UserController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }


    public function criarContaAction()
    {
        $form = new CriarContaForm();

        return new ViewModel(
            array(
                'form' => $form, 
            )
        );
    }

    public function loginAction()
    {
        return new ViewModel();
    }

    public function esqueciSenhaAction()
    {
        $form = new EsqueciSenhaForm();

        return new ViewModel(
            array(
                'form' => $form,
            )
        );
    }
}
