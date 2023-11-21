<?php

declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;
use Symfony\Component\Serializer\Annotation\Groups;

class FullNameDTO
{
    public function __construct(
        #[Groups(['user:read', 'user:write'])]
        private string $givenName,

        #[Groups(['user:read', 'user:write'])]
        private string $familyName,
        
        #[Groups(['user:read', 'user:write'])]
        private string $age
        )
    {
        
    }
    

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Get the value of familyName
         */ 
        public function getFamilyName()
        {
                return $this->familyName;
        }

        /**
         * Get the value of givenName
         */ 
        public function getGivenName()
        {
                return $this->givenName;
        }
}
