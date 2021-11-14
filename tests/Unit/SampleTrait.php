<?php

namespace App\Tests\Unit;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

trait SampleTrait
{
    public function testService(): void
    {
        $entityManager = static::getContainer()->get(EntityManagerInterface::class);
        $entityManager->flush();
    }

    protected abstract static function getContainer(): ContainerInterface;
}
