<?php

namespace App\Controller;

use App\Repository\PictureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function homepageAction(
        Environment $twig,
        PictureRepository $repository

    ) {

        return new Response(
            $twig->render(
                'default/homepage.html.twig',
                [
                    'pictures' => $repository->findAll()
                ]
            )
        );
    }
    /**
     * @Route("/terms", name="term_of_service")
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function termsOfServiceAction(Environment $twig)
    {
        return new Response(
            $twig->render(
                '/terms.html.twig'
                ));
    }
}