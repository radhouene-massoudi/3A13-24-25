<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/authors')]
class AuthorsController extends AbstractController
{
    #[Route('/authors', name: 'app_authors')]
    public function index(): Response
    {
        return $this->render('authors/index.html.twig', [
            'controller_name' => 'AuthorsController',
        ]);
    }
    #[Route('/list', name: 'list')]
   
    public function listAuthors(){
        $authors = array(
            array('id' => 1, 'picture' => '/Hugo.png','username' => 'Victor Hugo', 'email' =>
            'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/william-shakespeare.png','username' => ' William Shakespeare', 'email' =>
            ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/Taha.png','username' => 'Taha Hussein', 'email' =>
            'taha.hussein@gmail.com', 'nb_books' => 300),
            );
            return $this->render("authors/list.html.twig",[
                "authors"=>$authors
            ]);
    }
    #[Route('/detail/{idt}', name: 'abc')]
    public function details($idt){
        return $this->render('authors/showauthor.html.twig',[
            'id'=>$idt
        ]);

    }
}
