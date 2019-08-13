<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        
        if (!$session->has('langue')) $session->set('langue','ar');
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('BackBundle:Posts')->inIndex();
        $posts_list = array();
        foreach ($posts as $post){
            // When you have your own client ID and secret, put them down here:
            $CLIENT_ID = "FREE_TRIAL_ACCOUNT";
            $CLIENT_SECRET = "PUBLIC_SECRET";
            // Specify your translation requirements here:
            $postData = array(
              'fromLang' => "fr",
              'toLang' => $session->get('langue'),
              'text' => $post->getTitle()
            );
            $headers = array(
              'Content-Type: application/json',
              'X-WM-CLIENT-ID: '.$CLIENT_ID,
              'X-WM-CLIENT-SECRET: '.$CLIENT_SECRET
            );
            $url = 'http://api.whatsmate.net/v1/translation/translate';
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
            $response = curl_exec($ch);
            $posts_list [] = ['title' => $response, 'image' => $post->getImage()];
            curl_close($ch);
        }
        return $this->render('@Front/Default/index.html.twig', array('posts' => $posts_list));
    }
    
    public function navbarItemsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $langues = $em->getRepository('FrontBundle:Langues')->findAll();
        return $this->render('@Front/Default/navItems.html.twig', array('langues' => $langues));
    }
}
