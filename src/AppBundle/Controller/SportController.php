<?php
/**
 * Created by PhpStorm.
 * User: Amaru Signore
 * Date: 14-2-2018
 * Time: 11:15
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Afdeling;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class SportController extends Controller
{
    private function getSports(){
        return [
            [
                'name' => 'voetbal',
                'desc' => 'Voetbal speel je met een bal',
                'news' => [
                    '1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    '2' => 'Nulla id nisi iaculis, accumsan justo non, facilisis orci.',
                    '3' => 'In vestibulum quam in fermentum luctus.'
                    ],
                'about' => [
                    '1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas condimentum neque sed tincidunt tristique. Ut consequat aliquet quam ut porta. Suspendisse volutpat orci ut dignissim hendrerit. Proin suscipit libero eget turpis euismod, id accumsan risus condimentum. Proin in massa sit amet nunc placerat volutpat ut vel libero. Etiam at commodo arcu, nec sagittis orci. Pellentesque ut magna ut justo ullamcorper condimentum vel eget nibh. Vivamus maximus sit amet nunc ac placerat. Maecenas pulvinar sollicitudin tortor. Duis in varius tortor, vitae pharetra arcu. Proin lacinia dictum imperdiet. Phasellus scelerisque porttitor tortor sit amet semper. Nulla quis elementum urna.',
                    '2' => 'Quisque eu viverra tortor, non accumsan lacus. Aliquam erat volutpat. Etiam a suscipit mauris, a varius libero. Donec semper sem at tortor malesuada, a rutrum quam porttitor. Donec ultricies venenatis libero ac rutrum. Donec congue eleifend lectus vel tincidunt. Aenean a tincidunt leo.'
                ]
            ],
            [
                'name' => 'schaatsen',
                'desc' => 'schaatsen doe je op ijs',
                'news' => [
                    '1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    '2' => 'Nulla id nisi iaculis, accumsan justo non, facilisis orci.',
                    '3' => 'In vestibulum quam in fermentum luctus.'
                    ],
                'about' => [
                    '1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas condimentum neque sed tincidunt tristique. Ut consequat aliquet quam ut porta. Suspendisse volutpat orci ut dignissim hendrerit. Proin suscipit libero eget turpis euismod, id accumsan risus condimentum. Proin in massa sit amet nunc placerat volutpat ut vel libero. Etiam at commodo arcu, nec sagittis orci. Pellentesque ut magna ut justo ullamcorper condimentum vel eget nibh. Vivamus maximus sit amet nunc ac placerat. Maecenas pulvinar sollicitudin tortor. Duis in varius tortor, vitae pharetra arcu. Proin lacinia dictum imperdiet. Phasellus scelerisque porttitor tortor sit amet semper. Nulla quis elementum urna.',
                    '2' => 'Quisque eu viverra tortor, non accumsan lacus. Aliquam erat volutpat. Etiam a suscipit mauris, a varius libero. Donec semper sem at tortor malesuada, a rutrum quam porttitor. Donec ultricies venenatis libero ac rutrum. Donec congue eleifend lectus vel tincidunt. Aenean a tincidunt leo.'
                ]
            ],
            [
                'name' => 'hardlopen',
                'desc' => 'hardlopen is gaaf',
                'news' => [
                    '1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    '2' => 'Nulla id nisi iaculis, accumsan justo non, facilisis orci.',
                    '3' => 'In vestibulum quam in fermentum luctus.'
                    ],
                'about' => [
                    '1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas condimentum neque sed tincidunt tristique. Ut consequat aliquet quam ut porta. Suspendisse volutpat orci ut dignissim hendrerit. Proin suscipit libero eget turpis euismod, id accumsan risus condimentum. Proin in massa sit amet nunc placerat volutpat ut vel libero. Etiam at commodo arcu, nec sagittis orci. Pellentesque ut magna ut justo ullamcorper condimentum vel eget nibh. Vivamus maximus sit amet nunc ac placerat. Maecenas pulvinar sollicitudin tortor. Duis in varius tortor, vitae pharetra arcu. Proin lacinia dictum imperdiet. Phasellus scelerisque porttitor tortor sit amet semper. Nulla quis elementum urna.',
                    '2' => 'Quisque eu viverra tortor, non accumsan lacus. Aliquam erat volutpat. Etiam a suscipit mauris, a varius libero. Donec semper sem at tortor malesuada, a rutrum quam porttitor. Donec ultricies venenatis libero ac rutrum. Donec congue eleifend lectus vel tincidunt. Aenean a tincidunt leo.'
                ]
            ],
            [
                'name' => 'tennis',
                'desc' => 'tennis is intensief',
                'news' => [
                    '1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    '2' => 'Nulla id nisi iaculis, accumsan justo non, facilisis orci.',
                    '3' => 'In vestibulum quam in fermentum luctus.'
                    ],
                'about' => [
                    '1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas condimentum neque sed tincidunt tristique. Ut consequat aliquet quam ut porta. Suspendisse volutpat orci ut dignissim hendrerit. Proin suscipit libero eget turpis euismod, id accumsan risus condimentum. Proin in massa sit amet nunc placerat volutpat ut vel libero. Etiam at commodo arcu, nec sagittis orci. Pellentesque ut magna ut justo ullamcorper condimentum vel eget nibh. Vivamus maximus sit amet nunc ac placerat. Maecenas pulvinar sollicitudin tortor. Duis in varius tortor, vitae pharetra arcu. Proin lacinia dictum imperdiet. Phasellus scelerisque porttitor tortor sit amet semper. Nulla quis elementum urna.',
                    '2' => 'Quisque eu viverra tortor, non accumsan lacus. Aliquam erat volutpat. Etiam a suscipit mauris, a varius libero. Donec semper sem at tortor malesuada, a rutrum quam porttitor. Donec ultricies venenatis libero ac rutrum. Donec congue eleifend lectus vel tincidunt. Aenean a tincidunt leo.'
                ]
            ],
            [
                'name' => 'hockey',
                'desc' => 'hockey is gevaarlijk',
                'news' => [
                    '1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    '2' => 'Nulla id nisi iaculis, accumsan justo non, facilisis orci.',
                    '3' => 'In vestibulum quam in fermentum luctus.'
                    ],
                'about' => [
                    '1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas condimentum neque sed tincidunt tristique. Ut consequat aliquet quam ut porta. Suspendisse volutpat orci ut dignissim hendrerit. Proin suscipit libero eget turpis euismod, id accumsan risus condimentum. Proin in massa sit amet nunc placerat volutpat ut vel libero. Etiam at commodo arcu, nec sagittis orci. Pellentesque ut magna ut justo ullamcorper condimentum vel eget nibh. Vivamus maximus sit amet nunc ac placerat. Maecenas pulvinar sollicitudin tortor. Duis in varius tortor, vitae pharetra arcu. Proin lacinia dictum imperdiet. Phasellus scelerisque porttitor tortor sit amet semper. Nulla quis elementum urna.',
                    '2' => 'Quisque eu viverra tortor, non accumsan lacus. Aliquam erat volutpat. Etiam a suscipit mauris, a varius libero. Donec semper sem at tortor malesuada, a rutrum quam porttitor. Donec ultricies venenatis libero ac rutrum. Donec congue eleifend lectus vel tincidunt. Aenean a tincidunt leo.'
                ]
            ]
        ];
    }

    /**
     * @Route("/", name="homepage")
     */
    public function showAction()
    {
        $sports = $this->getDoctrine()->getRepository('AppBundle:Sport')->findAll();
        return $this->render('default/index.html.twig', [
            'sports' => $sports,
        ]);
    }

    /**
     * @Route("/sport/{id}", name="detail_sport")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sportAction($id)
    {
        $sports = $this->getDoctrine()->getRepository('AppBundle:Sport')->find($id);
                return $this->render("sports/show.html.twig", [
                    'sport' => $sports
                ]);
    }



    /**
     * @Route("/user", name="user")
     */
    public function userAction(){
        return $this->render('default/user.html.twig', [

        ]);
    }

    /**
     * @Route("/aanmelden", name="aanmelden")
     */
    public function aanmeldenAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $u = new User();
        $form = $this->createForm(UserType::class, $u);
        $form->add('save', SubmitType::class, array('label'=>'Registreren'));
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $repository=$this->getDoctrine()->getRepository(User::class);
            $bestaande_user=$repository->findOneBy(['username'=>$form->getData()->getUsername()]);

            if($bestaande_user==null){
                $password = $passwordEncoder->encodePassword($u, $u->getPassword());
                $u->setPassword($password);
                $u->setRoles(['ROLE_USER']);
                $u->setSalary("0.00");

                $em = $this->getDoctrine()->getManager();
                $em->persist($u);
                $em->flush();

                $this->addFlash(
                    'notice',
                    $u->getUsername() . ' is geregistreerd!'
                );
            }
            else {
                $this->addFlash(
                    'error',
                    'Er is iets misgegaan!'
                );
                return $this->render('default/aanmelden.html.twig', [
                    'form'=>$form->createView()
                ]);
            }
        }
        return $this->render('default/aanmelden.html.twig', [
            'form'=>$form->createView()
        ]);
    }
}