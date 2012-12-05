<?php

namespace Unknownbliss\MichaelCullumComBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UnknownblissMichaelCullumComBundle:Default:index.html.twig', array('name' => $name));
    }
}
