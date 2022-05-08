<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\PasswordHasherEncoder;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher ;

    public function __construct(UserPasswordHasherInterface $hasher )
    {
        $this->hasher=$hasher ;
    }
    public function load(ObjectManager $manager): void
    {

        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $passwordHacher = $this->hasher->hashPassword($user , 'password');
        $user->setEmail('test@test.com')
             ->setPassword($passwordHacher);
        $manager->persist($user);
        $manager->flush();
    }
}
