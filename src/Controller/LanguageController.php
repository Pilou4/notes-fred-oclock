<?php

namespace App\Controller;

use App\Entity\BaliseDescription;
use App\Entity\BaliseEnTete;
use App\Entity\BaliseGenerique;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LanguageController extends AbstractController 
{
    /**
     *
     *@Route ("/language/css" , name="language_css" , methods={"GET"})
     */
    public function css ()
    {
        return $this->render('language/css.html.twig');
    }

    /**
     *
     *@Route ("/language/html" , name="language_html" , methods={"GET"})
     */
    public function html ()
    {
       
        return $this->render('language/html.html.twig');
    }

    /**
     *
     *@Route ("/language/php" , name="language_php" , methods={"GET"})
     */
    public function php ()
    {
        return $this->render('language/php.html.twig');
    }

     /**
     *
     *@Route ("/language/javascript" , name="language_js" , methods={"GET"})
     */
    public function javascript ()
    {
        return $this->render('language/javascript.html.twig');
    }

    /**
     *
     *@Route ("/language/twig" , name="language_twig" , methods={"GET"})
     */
    public function twig ()
    {
        return $this->render('language/twig.html.twig');        
    }
}


