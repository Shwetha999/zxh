<?php

namespace HelloBundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HelloBundleTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
