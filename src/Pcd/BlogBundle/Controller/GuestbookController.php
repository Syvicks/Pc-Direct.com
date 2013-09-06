<?php

// src/Pcd/BlogBundle/Controller/GuestbookController.php

namespace Pcd\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pcd\BlogBundle\Entity\Guestbook;
use Pcd\BlogBundle\Form\GuestbookType;

class GuestbookController extends Controller
{
  public function indexAction()
  {
      // On récupère l'EntityManager pour accéder au Entités
      $em = $this->getDoctrine()
                 ->getManager();
        
      // On recupère tout ce qui se trouve dans l'entité Guestbook
      $entries = $em->getRepository('PcdBlogBundle:Guestbook')
                    ->getEntries();
      
      $request = $this->getRequest();
      
      // On créer un nouveau visiteur
      $guestbook = new Guestbook();
      // On appel le formulaire du "Livre d'or"
      $form = $this->createForm(new GuestbookType(), $guestbook);
      
      if ($request->isMethod('POST'))
          {
          $form->bind($request);
          
          
          if ($form->isValid())
              {
              // On 
              $em->persist($guestbook);
              // On enregistre dans la base de données la signature
              $em->flush();
                
              // Après la validation du formulaire on redirige vers la page "Livre d'or"              
              return $this->redirect($this->generateUrl('pcdblog_guestbook'));
          }
      }
      
      // On appel le template
      return $this->render('PcdBlogBundle:Guestbook:Index.html.twig', array(
          'entries' => $entries,
          'form' => $form->createView(),
      ));
  }
  
  public function deleteAction($id)
  {
      $em = $this->getDoctrine()
                 ->getManager();
      
      $guestbook = $em->getRepository('PcdBlogBundle:Guestbook')
                      ->find($id);
      
      if (!$guestbook) {
          throw $this->createNotFoundException('Unable to find Entry entity.');
      }
      
      $em->remove($guestbook);
      $em->flush();
        
      return $this->redirect($this->generateUrl('pcdblog_guestbook'));
  }
}
?>
