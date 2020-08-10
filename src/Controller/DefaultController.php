<?php

namespace App\Controller;

use App\Entity\Terminal;
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

    /**
     *
     *@Route ("/default/terminal" , name="default_terminal" , methods={"GET"})
     */
    public function terminal ()
    {
        return $this->render('default/terminal.html.twig',);     
    }

    /**
     * @Route ("/default/poste", name="default_post" , methods={"GET"})
     */
    public function poste () 
    {
        return $this->render('default/poste.html.twig');
    }

}




