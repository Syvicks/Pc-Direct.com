<?php
 
// src/Pcd/BlogBundle/Controller/ContactController.php
 
namespace Pcd\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pcd\BlogBundle\Entity\Contact;
use Pcd\BlogBundle\Form\ContactType;
 
class ContactController extends Controller
{
  public function indexAction()
  {
    $contact = new Contact();
    $form = $this->createForm(new ContactType(), $contact);

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);
        
        if ($form->isValid()) {

            $message = \Swift_Message::newInstance()
                ->setSubject('Contact enquiry from symblog')
                ->setFrom('enquiries@symblog.co.uk')
                ->setTo($this->container->getParameter('pcd_blog.emails.contact_email'))
                ->setBody($this->renderView('PcdBlogBundle:Contact:contactEmail.txt.twig', array('contact' => $contact)));
            $this->get('mailer')->send($message);

            $this->get('session')->setFlash('contact-notice', 'Your contact enquiry was successfully sent. Thank you!');

            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page
            return $this->redirect($this->generateUrl('pcdblog_contact'));
        }
    }

    return $this->render('PcdBlogBundle:Contact:index.html.twig', array(
        'form' => $form->createView()
    ));
  }
}
?>