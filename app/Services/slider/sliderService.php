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

    public function storeSlider($request)
    {
        $data = $request->all();
        $item = new Slider($data);
        $item->save();

        return $item;
    }

    public function editPost($id)
    {
        $item = Slider::FindorFail($id);
        $item->update();

        return $item;
    }
}
