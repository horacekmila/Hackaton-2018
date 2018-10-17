<?php
/**
 * Created by PhpStorm.
 * User: mila
 * Date: 17.10.18
 * Time: 19:21
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Page3Controller extends AbstractController
{
    public function page()
    {
        /**
         * @Route("/pages/page3")
         */

        return $this->render('pages/page3.html.twig');
    }
}