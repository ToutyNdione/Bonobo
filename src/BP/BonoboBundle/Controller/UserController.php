<?php

namespace BP\BonoboBundle\Controller;

use BP\BonoboBundle\Entity\User;
use BP\BonoboBundle\Entity\Friend;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 * @Route("user")
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('BPBonoboBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new user entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('BP\BonoboBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('BP\BonoboBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Add friend.
     *
     * @Route("/addfriend/{id}", name="addfriend")     
     * 
     */

    public function addFriend($id){

        $user= $this->container->get('security.token_storage')->getToken()->getUser();
        $user_id=  $user->getId();     
        $em = $this->getDoctrine()->getManager();
        $userr= $em->getRepository('BPBonoboBundle:User')->find($user_id);
        $friend= $em->getRepository('BPBonoboBundle:User')->find($id);
        $user->addMyFriend($friend);
        $user->getMyFriends($friend);
        
       // $em->persist($user);
        $em->flush();
       return $this->redirectToRoute('user_index');
    }
     /**
     * Remove friend.
     *
     * @Route("/removefriend/{id}", name="removefriend")     
     * 
     */

      public function removeFriend($id){

        $user= $this->container->get('security.token_storage')->getToken()->getUser();
        $user_id=  $user->getId();     
        $em = $this->getDoctrine()->getManager();
        $userr= $em->getRepository('BPBonoboBundle:User')->find($user_id);
        $friend= $em->getRepository('BPBonoboBundle:User')->find($id);
        $user->removeMyFriend($friend);
        $user->getMyFriends($friend);

       // $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('user_index');
    }



    /**
     * List friend.
     *
     * @Route("/friendlist/{id}", name="friendlist")     
     * @Method("GET")
     * 
     */

      public function listFriend($id){
//         $user= $this->container->get('security.token_storage')->getToken()->getUser();
        var_dump($id);
        $em = $this->getDoctrine()->getManager();

       $user= $em->getRepository('BPBonoboBundle:User')->find($id);
    $users=$user->getMyFriends();
// var_dump($friend->getUser());
foreach ($user->getmyFriends() as $user) {
       var_dump($user->getUsername());

      }
        return $this->render('user/friendlist.html.twig', array(
            'users' => $users,
     'friend_id' =>  $user->getId()
// }
        ));        
    }


    /**
     * Creates a form to delete a user entity.
     *   
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
            
        ;
    }
}
