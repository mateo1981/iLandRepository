<?php

namespace Bertelsmann\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BertelsmannDemoBundle:Default:index.html.twig', array('name' => $name));
    }
}
