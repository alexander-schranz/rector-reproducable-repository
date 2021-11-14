<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private ?DateTimeInterface $orderDetailsOrderDate = null;
}
