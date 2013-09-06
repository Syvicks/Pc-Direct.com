<?php
 
// src/Pcd/BlogBundle/Controller/DistanceController.php
 
namespace Pcd\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class DistanceController extends Controller
{
  public function indexAction()
  {
    return $this->render('PcdBlogBundle:Services/Distance:index.html.twig');
  }
}
?>