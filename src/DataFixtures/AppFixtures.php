<?php

namespace App\DataFixtures;
use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        for ($i=0; $i < 4; $i++) { 
            $usuario = new Usuario();
            $usuario->setEmail('usuario3@usuario.com' . $i);
            $usuario->setPassword('$2y$13$nSVuS.Ra10.GjjEJhtd2TOKqL3UBEm51B8vC2y5jnz/nff23ysAZ.');
            $usuario->setNombre('usuario' . +$i);
            $usuario->setPerfil('usuario');
            $manager->persist($usuario);
    
    
            $manager->flush();
        }

     
    }
}
