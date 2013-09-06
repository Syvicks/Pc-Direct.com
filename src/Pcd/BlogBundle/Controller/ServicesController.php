<?php
 
// src/Pcd/BlogBundle/Controller/ServicesController.php
 
namespace Pcd\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class ServicesController extends Controller
{
  public function indexAction()
  {
    return $this->render('PcdBlogBundle:Services:index.html.twig');
  }
}
?>