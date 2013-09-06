<?php
 
// src/Pcd/BlogBundle/Controller/PonctuelController.php
 
namespace Pcd\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class PonctuelController extends Controller
{
  public function indexAction()
  {
    return $this->render('PcdBlogBundle:Services/Ponctuel:index.html.twig');
  }
}
?>