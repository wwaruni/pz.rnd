<?php

namespace Pz\Proxy\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/platform/{name}", name="_demo")
     * @Template()
     */
    public function indexAction($name)
    {
        return $this->render('PzProxyPlatformBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @Route("/play", 
     * name="play")
     * @Template()
     */
    public function playAction()
    {
        return $this->render('PzProxyPlatformBundle:Default:play.html.twig');
    }
}
