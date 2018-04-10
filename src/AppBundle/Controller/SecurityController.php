<?php
/**
 * Created by PhpStorm.
 * User: Amaru Signore
 * Date: 15-2-2018
 * Time: 15:09
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */

    public function loginAction(Request $request, AuthenticationUtils $authUtils){
        $error = $authUtils->getLastAuthenticationError();

        $lastUserName = $authUtils->getLastUsername();


        return $this->render('default/login.html.twig', [
            'lastUsername' => $lastUserName,
            'error' => $error
        ]);
    }
}