<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RegionRepository;    
class ConsultController extends AbstractController
{
    /**
     * @Route("/index", name="webindex")
     */
    public function index(): Response
    {
        return $this->render('webpage/index.html.twig', [
            'controller_name' => 'ConsultController',
        ]);
    }
      /**
     * @Route("/accomodation", name="accomodation")
     */
    public function accomodaytion(RegionRepository $regionRepository): Response
    {
        
        return $this->render('webpage/accomodation.html.twig', [
            'controller_name' => 'ConsultController',
            'regions' => $regionRepository->findAll(),

        ]);
    }
        /**
     * @Route("/blog", name="blog")
     */
    public function blog(): Response
    {
        return $this->render('webpage/blog.html.twig', [
            'controller_name' => 'ConsultController',
        ]);
    }
        /**
     * @Route("/blog-single", name="blog-single")
     */
    public function blogsingle(): Response
    {
        return $this->render('webpage/blog-single.html.twig', [
            'controller_name' => 'ConsultController',
        ]);
    }
        /**
     * @Route("/gallery", name="gallery")
     */
    public function gallery(): Response
    {
        return $this->render('webpage/gallery.html.twig', [
            'controller_name' => 'ConsultController',
        ]);
    }
        /**
     * @Route("/elements", name="elements")
     */
    public function elements(): Response
    {
        return $this->render('webpage/elements.html.twig', [
            'controller_name' => 'ConsultController',
        ]);
    }
        /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('webpage/about.html.twig', [
            'controller_name' => 'ConsultController',
        ]);
    }
           /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('webpage/contact.html.twig', [
            'controller_name' => 'ConsultController',
        ]);
    }

       /**
     * @Route("/tashboard", name="tashboard")
     */
    public function tashboard(): Response
    {
        return $this->render('/tashboard.html.twig', [
            'controller_name' => 'ConsultController',
        ]);
    }

}
