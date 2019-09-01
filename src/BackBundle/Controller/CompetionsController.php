<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Competions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Competion controller.
 *
 * @Route("admin/competitions")
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
            
            $competion->setStatus($request->get('status'));
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
