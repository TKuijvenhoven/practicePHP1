<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Form\GenreType;
use App\Repository\GenreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController
{
    #[Route('/genre', name: 'app_genre')]
    public function index(GenreRepository $genreRepository): Response
    {
        $genres = $genreRepository->findAll();
        return $this->render('genre/index.html.twig', [
            'genres' => $genres,
        ]);
    }

    #[Route('/movies/{id}')]
    public function movies(GenreRepository $genreRepository,int $id):Response
    {
            $genre=$genreRepository->find($id);
            return $this->render('genre/movies.html.twig', [
                'genre'=>$genre,
            ]);
    }

    #[Route('/genre/new',name: 'genre_new')]
    public function insert(EntityManagerInterface $em, Request $request): Response
    {
        $genre = new Genre();
        $form = $this->createForm(GenreType::class, $genre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $genre = $form->getData();
            $em->persist($genre);
            $em->flush();

            // add a success flash message
            $this->addFlash('success', 'Genre created successfully!');

            // redirect to another page
            return $this->redirectToRoute('app_genre');
        }

        return $this->renderForm('genre/new.html.twig', [
            'genre_form' => $form,
        ]);
    }
}
