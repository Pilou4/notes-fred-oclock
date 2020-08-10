<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class FrameworkController extends AbstractController
{
    /**
     *
     *@Route ("/framework/symfony" , name="page_symfony" , methods={"GET"})
     */
    public function symfony ()
    {
        return $this->render('framework/symfony.html.twig');
    }

     /**
     *
     *@Route ("/framework/bootstrap" , name="page_bootstrap" , methods={"GET"})
     */
    public function bootstrap ()
    {
        return $this->render('framework/bootstrap.html.twig');
    }

     /**
     *
     *@Route ("/framework/lumen" , name="page_lumen" , methods={"GET"})
     */
    public function lumen ()
    {
        return $this->render('framework/lumen.html.twig');
    }
}
