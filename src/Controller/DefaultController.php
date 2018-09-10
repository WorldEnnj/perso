<?php
/**
 * Created by PhpStorm.
 * User: Rell
 * Date: 10/09/2018
 * Time: 16:47
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function index(){

        return $this->render('perso/vincentk.html.twig');

    }

    /**
     * @Route("/carole")
     */

    public function carole(){
        $nb="hello !";

        return $this->render('carole/carole.html.twig', array('nb' => $nb));

    }

}