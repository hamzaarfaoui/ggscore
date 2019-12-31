<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Posts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;


/**
 * Post controller.
 *
 * @Route("admin/posts")
 */
class PostsController extends Controller
{
    /**
     * Lists all post entities.
     *
     * @Route("/", name="admin_posts_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $posts = $em->getRepository('BackBundle:Posts')->findAll();

        return $this->render('posts/index.html.twig', array(
            'posts' => $posts,
        ));
    }
    
    /**
     * Slider.
     *
     * @Route("/slider", name="admin_slider")
     * @Method("GET")
     */
    public function sliderAction()
    {
        $em = $this->getDoctrine()->getManager();

        $posts = $em->getRepository('BackBundle:Posts')->inSlider();

        return $this->render('posts/slider.html.twig', array(
            'posts' => $posts,
        ));
    }
    
    /**
     *  Set article position in slider.
     *
     * @Route("/admin_set_article_position_in_slider/{id}", name="admin_set_article_position_in_slider")
     * @Method("GET")
     */
    public function setArticlePositionInSliderAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('BackBundle:Posts')->find($id);
        $position = $request->get('position');
        $post->setOrderInSlider($position);
        $em->persist($post);
        $em->flush();

        return new JsonResponse(array('status' => 'OK'));
    }

    /**
     * Creates a new post entity.
     *
     * @Route("/new", name="admin_posts_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $post = new Posts();
        $form = $this->createForm('BackBundle\Form\PostsType', $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            if (isset($_FILES["image"]) && !empty($_FILES["image"])) {
                  $file = $_FILES["image"]["name"];
                $File_Ext = substr($file, strrpos($file, '.'));
                $fileName = md5(uniqid()) . $File_Ext;
                move_uploaded_file(
                    $_FILES["image"]["tmp_name"], $this->getParameter('images_articles') . "/" . $fileName
                );
                $post->setImage($fileName);
             }
            $post->setCreatedAt(new \DateTime('now'));
            $post->setUpdatedAt(new \DateTime('now'));
            $post->setIsVertical($request->get('representation'));
            $post->setInSlider($request->get('inSlider'));
            $em->persist($post);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', "Article ajouté");
            return $this->redirectToRoute('admin_posts_edit', array('id' => $post->getId()));
        }

        return $this->render('posts/new.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a post entity.
     *
     * @Route("/{id}", name="admin_posts_show")
     * @Method("GET")
     */
    public function showAction(Posts $post)
    {
        $deleteForm = $this->createDeleteForm($post);

        return $this->render('posts/show.html.twig', array(
            'post' => $post,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing post entity.
     *
     * @Route("/{id}/edit", name="admin_posts_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Posts $post)
    {
        $deleteForm = $this->createDeleteForm($post);
        $editForm = $this->createForm('BackBundle\Form\PostsType', $post);
        
        $editForm->handleRequest($request);
        //dump($post->getImage());die();
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $post->setImage($post->getImage());
             if (isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])) {
                  $file = $_FILES["image"]["name"];
                $File_Ext = substr($file, strrpos($file, '.'));
                $fileName = md5(uniqid()) . $File_Ext;
                move_uploaded_file(
                    $_FILES["image"]["tmp_name"], $this->getParameter('images_articles') . "/" . $fileName
                );
                $post->setImage($fileName);
             }
             
            $post->setIsVertical($request->get('representation'));
            $post->setInSlider($request->get('inSlider'));
            $post->setUpdatedAt(new \DateTime('now'));
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('admin_posts_edit', array('id' => $post->getId()));
        }

        return $this->render('posts/edit.html.twig', array(
            'post' => $post,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a post entity.
     *
     * @Route("/delete/{id}", name="admin_posts_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, Posts $post)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('admin_posts_index');
    }
    
    /**
     * Deletes a post entity.
     *
     * @Route("/delete-image/{id}", name="admin_posts_delete_image")
     * @Method("POST")
     */
    public function deleteImageAction(Request $request, Posts $post)
    {
        $em = $this->getDoctrine()->getManager();
        $post->setImage(null);
        $em->persist($post);
        $em->flush();

        return $this->redirectToRoute('admin_posts_index');
    }

    /**
     * Creates a form to delete a post entity.
     *
     * @param Posts $post The post entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Posts $post)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_posts_delete', array('id' => $post->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
