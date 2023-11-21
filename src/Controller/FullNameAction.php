<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\User\FullNameDTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class FullNameAction extends AbstractController
{
    public function __invoke(Request $request)
    {
        print_r($request->getContent());

        exit();
    }
}
