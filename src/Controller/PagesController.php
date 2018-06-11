<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('pages/index.html.twig', [
            'header_pic' => 'img/home-bg.jpg'
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('pages/about.html.twig', [
            'header_pic' => 'img/about-bg.jpg'
        ]);
    }

    /**
     * @Route("/post", name="post")
     */
    public function post()
    {
        return $this->render('pages/post.html.twig', [
            'header_pic' => 'img/post-bg.jpg',
            'heading_class' => 'post-heading'
        ]);
    }

    /**
     * @Route("/contacts", name="contacts")
     */
    public function contacts()
    {
        $img = 'img/contact-bg.jpg';
        return $this->render('pages/contacts.html.twig', [
            'header_pic' => $img
        ]);
    }
}
