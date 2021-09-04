<?php

namespace App\Services\slider;

use App\Model\Slider;

class sliderService
{

    public function indexSlider()
    {
        $paginator = Slider::withTranslation()
            ->with('media')
            ->translated('en')
            ->oldest('sort')
            ->latest('id')
            ->paginate(15);

        return $paginator;
    }
}
