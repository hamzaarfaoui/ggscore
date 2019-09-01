<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Levels;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use BackBundle\Entity\Competions;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Level controller.
 *
 * @Route("admin/levels")
 */
class LevelsController extends Controller
{
    /**
     * Lists all level entities.
     *
     * @Route("/{id}", name="admin_levels_index")
     * @Method("GET")
     */
    public function indexAction(Competions $id)
    {
        $em = $this->getDoctrine()->getManager();

        $levels = $em->getRepository('BackBundle:Levels')->findBy(array('competition' => $id));

        return $this->render('levels/index.html.twig', array(
            'levels' => $levels,
            'competion' => $id
        ));
    }

    /**
     * Creates a new level entity.
     *
     * @Route("/new/{id}", name="admin_levels_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Competions $id)
    {
        $level = new Levels();
        $form = $this->createForm('BackBundle\Form\LevelsType', $level);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $level->setCompetition($id);
            $em->persist($level);
            $em->flush();

            return $this->redirectToRoute('admin_levels_show', array('id' => $level->getId()));
        }

        return $this->render('levels/new.html.twig', array(
            'level' => $level,
            'form' => $form->createView(),
            'competion' => $id
        ));
    }

    /**
     * Finds and displays a level entity.
     *
     * @Route("/{id}", name="admin_levels_show")
     * @Method("GET")
     */
    public function showAction(Levels $level)
    {
        $deleteForm = $this->createDeleteForm($level);

        return $this->render('levels/show.html.twig', array(
            'level' => $level,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing level entity.
     *
     * @Route("/{id}/edit", name="admin_levels_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Levels $level)
    {
        $deleteForm = $this->createDeleteForm($level);
        $editForm = $this->createForm('BackBundle\Form\LevelsType', $level);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_levels_edit', array('id' => $level->getId()));
        }

        return $this->render('levels/edit.html.twig', array(
            'level' => $level,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a level entity.
     *
     * @Route("/{id}", name="admin_levels_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Levels $level)
    {
        $form = $this->createDeleteForm($level);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($level);
            $em->flush();
        }

        return $this->redirectToRoute('admin_levels_index');
    }

    /**
     * Creates a form to delete a level entity.
     *
     * @param Levels $level The level entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Levels $level)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_levels_delete', array('id' => $level->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
