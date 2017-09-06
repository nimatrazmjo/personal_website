<?php

namespace Resume\ResumeBundle\Controller;

use Resume\ResumeBundle\Entity\Resume;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Resume controller.
 *
 */
class ResumeController extends Controller
{
    /**
     * Lists all resume entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $resumes = $em->getRepository('ResumeBundle:Resume')->findAll();

        return $this->render('resume/index.html.twig', array(
            'resumes' => $resumes,
        ));
    }

    /**
     * Creates a new resume entity.
     *
     */
    public function newAction(Request $request)
    {
        $resume = new Resume();
        $form = $this->createForm('Resume\ResumeBundle\Form\ResumeType', $resume);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($resume);
            $em->flush();

            return $this->redirectToRoute('resume_show', array('id' => $resume->getId()));
        }

        return $this->render('resume/new.html.twig', array(
            'resume' => $resume,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a resume entity.
     *
     */
    public function showAction(Resume $resume)
    {
        $deleteForm = $this->createDeleteForm($resume);

        return $this->render('resume/show.html.twig', array(
            'resume' => $resume,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing resume entity.
     *
     */
    public function editAction(Request $request, Resume $resume)
    {
        $deleteForm = $this->createDeleteForm($resume);
        $editForm = $this->createForm('Resume\ResumeBundle\Form\ResumeType', $resume);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('resume_edit', array('id' => $resume->getId()));
        }

        return $this->render('resume/edit.html.twig', array(
            'resume' => $resume,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a resume entity.
     *
     */
    public function deleteAction(Request $request, Resume $resume)
    {
        $form = $this->createDeleteForm($resume);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($resume);
            $em->flush();
        }

        return $this->redirectToRoute('resume_index');
    }

    /**
     * Creates a form to delete a resume entity.
     *
     * @param Resume $resume The resume entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Resume $resume)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('resume_delete', array('id' => $resume->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
