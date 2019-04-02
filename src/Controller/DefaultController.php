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
     * @throws \Twig\Error\ErrorLoader
     * @throws \Twig\Error\RuntimeError
     * @throws  \Twig\Error\SyntaxError
     */

    public function homepageAction(Environment $twig)
    {
        $color = 'red';

        return new Response(
            $twig->render(
            'default/homepage.html.twig',
                ['color' => $color
                ]
            )
        );
    }


    /**
     *  @Route("/terms", name="Terms_of_service")
     * @return Response
     */
    public function termsOfServiceAction()
    {
        return new Response('
<!DOCTYPE><html>
<body>
Terms of service... <a href="/whichName/public/">Home</a>
</body>
</html> ');
    }

}