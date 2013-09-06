<?php
 
// src/Pcd/BlogBundle/Controller/AboutController.php
 
namespace Pcd\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class AboutController extends Controller
{
  public function indexAction()
  {
    return $this->render('PcdBlogBundle:About:index.html.twig');
  }
}
?>