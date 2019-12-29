<?php

namespace FrontBundle\Controller;

use BackBundle\Entity\Posts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BackBundle\Entity\Competions;
use BackBundle\Entity\Levels;


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
    public function competitionsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $confedrations = $em->getRepository('BackBundle:Competions')->findBy(array('status' => 1));
        $ligue = $em->getRepository('BackBundle:Competions')->findBy(array('status' => 2));

        return $this->render('@Front/Default/navItems.html.twig', array(
            'competitions' => $confedrations,
            'ligues' => $ligue
        ));
    }
    
    //in respnsive view
    public function competitionsResponsiveAction()
    {
        $em = $this->getDoctrine()->getManager();

        $confedrations = $em->getRepository('BackBundle:Competions')->findBy(array('status' => 1));
        $ligue = $em->getRepository('BackBundle:Competions')->findBy(array('status' => 2));

        return $this->render('@Front/Default/navItemsResponsive.html.twig', array(
            'competitions' => $confedrations,
            'ligues' => $ligue
        ));
    }
    
    /**
     * Finds and displays a competion entity.
     *
     * @Route("/competition-details/{id}", name="competitions_show")
     * @Method("GET")
     */
    public function showcompetitionAction(Competions $competion)
    {
        return $this->render('competions/showFront.html.twig', array(
            'competion' => $competion,
        ));
    }
    
    /**
     * Finds and displays a competion entity.
     *
     * @Route("/level-details/{id}", name="level_front_show")
     * @Method("GET")
     */
    public function showlevelFrontAction(Levels $level)
    {
        return $this->render('levels/showFront.html.twig', array(
            'level' => $level,
        ));
    }
    
    /**
     * Finds and displays a level entity.
     *
     * @Route("/competition-levels/{id}", name="levels_show")
     * @Method("GET")
     */
    public function showLevelAction(Levels $level)
    {
        $deleteForm = $this->createDeleteForm($level);

        return $this->render('levels/showFront.html.twig', array(
            'level' => $level,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
//    public function navbarItemsAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $langues = $em->getRepository('FrontBundle:Langues')->findAll();
//        return $this->render('@Front/Default/navItems.html.twig', array('langues' => $langues));
//    }
}
