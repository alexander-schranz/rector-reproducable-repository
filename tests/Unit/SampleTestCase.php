<?php

namespace App\Tests\Unit;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SampleTestCase extends KernelTestCase
{
    public function testService(): void
    {
        $entityManager = static::getContainer()->get(EntityManagerInterface::class);
        $entityManager->flush();
    }
}
