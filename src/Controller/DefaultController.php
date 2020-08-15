<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DefaultController extends AbstractController 
{
    /**
     *
     *@Route ("/" , name="homepage" , methods={"GET"})
     */
    public function homepage ()
    {
        return $this->render('default/homepage.html.twig');
    }

}




