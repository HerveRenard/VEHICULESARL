<?php

namespace App\Controller;

use App\Entity\Modele;
use App\Form\ModeleType;
use App\Repository\ModeleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/modele")
 */
class ModeleController extends AbstractController
{
    /**
     * @Route("/", name="app_modele_index", methods={"GET"})
     */
    public function index(ModeleRepository $modeleRepository): Response
    {
        return $this->render('modele/index.html.twig', [
            'modeles' => $modeleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_modele_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ModeleRepository $modeleRepository): Response
    {
        $modele = new Modele();
        $form = $this->createForm(ModeleType::class, $modele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $modeleRepository->add($modele, true);

            return $this->redirectToRoute('app_modele_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('modele/new.html.twig', [
            'modele' => $modele,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_modele_show", methods={"GET"})
     */
    public function show(Modele $modele): Response
    {
        return $this->render('modele/show.html.twig', [
            'modele' => $modele,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_modele_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Modele $modele, ModeleRepository $modeleRepository): Response
    {
        $form = $this->createForm(ModeleType::class, $modele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $modeleRepository->add($modele, true);

            return $this->redirectToRoute('app_modele_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('modele/edit.html.twig', [
            'modele' => $modele,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_modele_delete", methods={"POST"})
     */
    public function delete(Request $request, Modele $modele, ModeleRepository $modeleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$modele->getId(), $request->request->get('_token'))) {
            $modeleRepository->remove($modele, true);
        }

        return $this->redirectToRoute('app_modele_index', [], Response::HTTP_SEE_OTHER);
    }
}
