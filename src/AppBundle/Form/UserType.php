<?php
/**
 * Created by PhpStorm.
 * User: Amaru Signore
 * Date: 22-3-2018
 * Time: 15:06
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array('label'=>'Gebruikersnaam'))
            ->add('password', RepeatedType::class, array(
                'type'=>PasswordType::class,
                'first_options' => array('label'=>'Wachtwoord'),
                'second_options' => array('label'=>'Herhaal Wachtwoord')
            ))
            ->add('email', EmailType::class, array('label'=>'Email'));
    }
}