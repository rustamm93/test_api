<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\Odam\OdamFactory;
use App\Component\Odam\OdamManager;
use App\Entity\Odam;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OdamCreateAction extends AbstractController
{
    public function __construct(private OdamFactory $odamFactory, private OdamManager $odamManager)
    {
        
    }
    public function __invoke(Odam $data):Odam
    {
        $odam = $this->odamFactory->create($data->getIsm(), $data->getFamiliya(), $data->getYosh());
        $this->odamManager->save($odam, true);

        return $odam;
    }
}
