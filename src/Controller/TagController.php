<?php


namespace App\Controller;


use App\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TagController extends AbstractController
{
    /**
     * @Route("/tag", name="api_tag_getAll")
     */
    public function getTags()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository(Tag::class);
        $tags = $repository->findAll();
        return $this->json($tags);

    }

}