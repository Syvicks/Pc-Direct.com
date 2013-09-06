<?php
 
// src/Pcd/BlogBundle/Controller/FormationController.php
 
namespace Pcd\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class FormationController extends Controller
{
  public function indexAction()
  {
    return $this->render('PcdBlogBundle:Services/Formation:index.html.twig');
  }
}
?>