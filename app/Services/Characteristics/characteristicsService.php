<?php

namespace App\Services\Characteristics;

use App\Model\Characteristic;

class characteristicsService
{
    public function indexCharacteristic()
    {
       $paginator= Characteristic::paginate(15);

        return $paginator;
    }
}
