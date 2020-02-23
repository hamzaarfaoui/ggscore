<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Competions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Competion controller.
 *
 * @Route("ggh-hh/competitions")
 */
class CompetionsController extends Controller
{
    /**
     * Lists all competion entities.
     *
     * @Route("/", name="admin_competitions_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $competions = $em->getRepository('BackBundle:Competions')->findAll();

        return $this->render('competions/index.html.twig', array(
            'competions' => $competions,
        ));
    }

    /**
     * Creates a new competion entity.
     *
     * @Route("/new", name="admin_competitions_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $competion = new Competions();
        $form = $this->createForm('BackBundle\Form\CompetionsType', $competion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $competion->setStatus($request->get('status'));
            $competion->setRegion($request->get('region'));
            if(!empty($request->get('content'))){
                $competion->setContent($request->get('content'));
            }
            if(!empty($request->get('contentClassement'))){
                $competion->setContentClassement($request->get('contentClassement'));
            }
            $em->persist($competion);
            $em->flush();

            return $this->redirectToRoute('admin_competitions_show', array('id' => $competion->getId()));
        }

        return $this->render('competions/new.html.twig', array(
            'competion' => $competion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a competion entity.
     *
     * @Route("/{id}", name="admin_competitions_show")
     * @Method("GET")
     */
    public function showAction(Competions $competion)
    {
        $deleteForm = $this->createDeleteForm($competion);

        return $this->render('competions/show.html.twig', array(
            'competion' => $competion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing competion entity.
     *
     * @Route("/{id}/edit", name="admin_competitions_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Competions $competion)
    {
        $deleteForm = $this->createDeleteForm($competion);
        $editForm = $this->createForm('BackBundle\Form\CompetionsType', $competion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $competion->setLogo($competion->getLogo());
            $competion->setFond($competion->getFond());
             if (isset($_FILES["logo"]["name"]) && !empty($_FILES["logo"]["name"])) {
                  $file = $_FILES["logo"]["name"];
                $File_Ext = substr($file, strrpos($file, '.'));
                $fileName = md5(uniqid()) . $File_Ext;
                move_uploaded_file(
                    $_FILES["logo"]["tmp_name"], $this->getParameter('logos_competitions') . "/" . $fileName
                );
                $competion->setLogo($fileName);
             }
             if (isset($_FILES["fond"]["name"]) && !empty($_FILES["fond"]["name"])) {
                  $file = $_FILES["fond"]["name"];
                $File_Ext = substr($file, strrpos($file, '.'));
                $fileName = md5(uniqid()) . $File_Ext;
                move_uploaded_file(
                    $_FILES["fond"]["tmp_name"], $this->getParameter('fond_competitions') . "/" . $fileName
                );
                $competion->setFond($fileName);
             }
            $competion->setStatus($request->get('status'));
            $competion->setRegion($request->get('region'));
            if(!empty($request->get('content'))){
                $competion->setContent($request->get('content'));
            }
            if(!empty($request->get('contentClassement'))){
                $competion->setContentClassement($request->get('contentClassement'));
            }
            $em->persist($competion);
            $em->flush();
            return $this->redirectToRoute('admin_competitions_edit', array('id' => $competion->getId()));
        }

        return $this->render('competions/edit.html.twig', array(
            'competion' => $competion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a competion entity.
     *
     * @Route("/{id}", name="admin_competitions_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Competions $competion)
    {
        $form = $this->createDeleteForm($competion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($competion);
            $em->flush();
        }

        return $this->redirectToRoute('admin_competitions_index');
    }
    
    /**
     * Deletes logo competition
     *
     * @Route("/delete-logo/{id}", name="admin_competition_logo")
     * @Method("POST")
     */
    public function deletelogoAction(Request $request, Competions $competion)
    {
        $em = $this->getDoctrine()->getManager();
        $competion->setLogo(null);
        $em->persist($competion);
        $em->flush();

        return new JsonResponse(array('message' => 'logo deleted'));
    }
    /**
     * Delete fond competition
     *
     * @Route("/delete-fond/{id}", name="admin_competition_fond")
     * @Method("POST")
     */
    public function deletefondAction(Request $request, Competions $competion)
    {
        $em = $this->getDoctrine()->getManager();
        $competion->setFond(null);
        $em->persist($competion);
        $em->flush();

        return new JsonResponse(array('message' => 'fond deleted'));
    }

    /**
     * Creates a form to delete a competion entity.
     *
     * @param Competions $competion The competion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Competions $competion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_competitions_delete', array('id' => $competion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
