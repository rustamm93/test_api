<?php

declare(strict_types=1);

namespace App\Component\Odam;

use App\Entity\Odam;
use Doctrine\ORM\EntityManagerInterface;

class OdamManager
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
        
    }

    public function save(Odam $odam, bool $isNeedFlush = false):void
    {
        $this->entityManager->persist($odam);

        if ($isNeedFlush) {
            $this->entityManager->flush();
        }
    }
}
