<?php


namespace App\Controller;


use App\Entity\Picture;
use App\Form\PictureFormType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PictureController
{
    /**
    * @Route("/add/picture", name="add_picture")
    */
    public function addPicture(
        Request $request,
        FormFactoryInterface $formFactory,
        Environment $twig
    ) {
        $picture = new Picture();
        $form = $formFactory->create(PictureFormType::class, $picture, ['standalone' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            // TODO: bla
        }

        return new Response(
            $twig->render(
                'Picture/add-picture.html.twig',
                ['form' => $form->createView()]
            )
        );

    }
}