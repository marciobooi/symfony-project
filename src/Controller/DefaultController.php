<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class DefaultController
{

    /**
     *
     * @Route("/", name="homepage")
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws  \Twig\Error\SyntaxError
     */

    public function homepageAction(Environment $twig)
    {


        return new Response(
            $twig->render(
                'default/homepage.html.twig'

            )
        );
    }


    /**
     * @Route("/terms", name="Terms_of_service")
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws  \Twig\Error\SyntaxError
     */
    public function termsOfServiceAction(Environment $twig)
    {
        return new Response(
            $twig->render(
                '/terms.html.twig'

            )
        );
    }
}