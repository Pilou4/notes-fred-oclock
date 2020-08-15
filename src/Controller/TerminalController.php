<?php

namespace App\Controller;

use App\Entity\Terminal;
use App\Entity\TerminalSys;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TerminalController extends AbstractController 
{
    
    /**
     *
     *@Route ("/terminal/list" , name="terminal_list" , methods={"GET"})
     */
    public function list ()
    {
        $repositorySys = $this->getDoctrine()->getRepository(TerminalSys::class);
        $systemes = $repositorySys->findAll();
        $repository = $this->getDoctrine()->getRepository(Terminal::class);
        $terminal = $repository->findAll();
        return $this->render('terminal/list.html.twig',
        [
            "terminals" => $terminal,
            "systemes" => $systemes
        ]);     
    }

     /**
     *
     *@Route ("/terminal/{id}" , name="terminal_id" , methods={"GET"})
     */
    public function terminal (Terminal $terminal)
    {
        
        return $this->render('terminal/view.html.twig',
        [
            "terminal" => $terminal,
            
        ]);     
    }

     /**
     *
     *@Route ("/terminalSys/{id}" , name="terminalSys_id" , methods={"GET"})
     */
    public function terminalSys (TerminalSys $terminalSys)
    {
        
        return $this->render('terminal/viewSys.html.twig',
        [
            "systemes" => $terminalSys,
            
        ]);     
    }
    
    /**
     * @Route ("/default/poste", name="default_post" , methods={"GET"})
     */
    public function poste () 
    {
        return $this->render('default/poste.html.twig');
    }

}