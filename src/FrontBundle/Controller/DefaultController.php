<?php

namespace FrontBundle\Controller;

use BackBundle\Entity\Posts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Post controller.
 *
 * @Route("/")
 */
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        
        
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('BackBundle:Posts')->inIndex();
        return $this->render('@Front/Default/index.html.twig', array('posts' => $posts));
    }
    
    /**
     * Finds and displays a post entity.
     *
     * @Route("/posts/{id}", name="front_posts_show")
     * @Method("GET")
     */
    public function showArticleAction(Posts $post)
    {
        return $this->render('posts/showInFront.html.twig', array(
            'post' => $post,
        ));
    }
    
//    public function navbarItemsAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $langues = $em->getRepository('FrontBundle:Langues')->findAll();
//        return $this->render('@Front/Default/navItems.html.twig', array('langues' => $langues));
//    }
}
