<?php

declare(strict_types=1);

namespace App\Component\Odam;

use App\Entity\Odam;

class OdamFactory
{
    
    public function create(string $ism, string $familiya, int $yosh):Odam
    {
        $odam = new Odam();
        $odam->setIsm($ism);
        $odam->setFamiliya($familiya);
        $odam->setYosh($yosh+10);

        return $odam;
    }
}
