<?php
/**
 * Created by PhpStorm.
 * User: Amaru Signore
 * Date: 22-3-2018
 * Time: 14:10
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Afdeling;
use AppBundle\Entity\User;
use http\Env\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction(){
        return $this->render('admin/admin.html.twig', [

        ]);
    }

    /**
     * @Route("admin/beheer/{type}", name="beheer")
     */
    public function beheerAction($type)
    {
        if ($type == "user"){
            $items=$this->getDoctrine()->getRepository('AppBundle:User')->findAll();
            $columns=$this->getDoctrine()->getManager()->getClassMetadata('AppBundle:User')->getFieldNames();
            $type = "Gebruikers";
        }elseif ($type == "sport"){
            $items=$this->getDoctrine()->getRepository('AppBundle:Sport')->findAll();
            $columns=$this->getDoctrine()->getManager()->getClassMetadata('AppBundle:Sport')->getFieldNames();
            $type = "Sporten";
        }elseif ($type == "afdeling"){
            $items=$this->getDoctrine()->getRepository('AppBundle:Afdeling')->findAll();
            $columns=$this->getDoctrine()->getManager()->getClassMetadata('AppBundle:Afdeling')->getFieldNames();
            $type = "Afdelingen";
        }


        return $this->render('admin/beheer.html.twig', [
            'type'=>$type,
            'items'=>$items,
            'columns'=>$columns,
        ]);
    }

    /**
     * @Route("admin/create", name="createsport")
     */
    public function createAction(){

        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("admin/weizig/{type}/{id}", name="weizig")
     */
    public function resetAction($type, $id)
    {

        return $this->redirectToRoute('admin');
    }

    /**
     * @Route("admin/delete/{type}/{id}", name="delete")
     */
    public function deleteUserAction($type, $id)
    {
        $em = $this->getDoctrine()->getManager();
        if ($type == "Gebruikers"){
            $item = $this->getDoctrine()->getRepository(User::class)->find($id);
        }elseif ($type == "Sporten"){
            $item = $this->getDoctrine()->getRepository(Sport::class)->find($id);
        }elseif ($type == "Afdelingen"){
            $item = $this->getDoctrine()->getRepository(Afdeling::class)->find($id);
        }

        $em->remove($item);
        $em->flush();
        $this->addFlash(
            'notice',
            $type . 'Succesfully deleted!'
        );

        return $this->redirectToRoute('admin');
    }
}