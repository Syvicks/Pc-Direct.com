<?php
 
// src/Pcd/BlogBundle/Controller/HomeController.php
 
namespace Pcd\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class HomeController extends Controller
{
  public function indexAction()
  {
    return $this->render('PcdBlogBundle:Home:index.html.twig');
  }
}
?>