<?php

namespace App\Services\Service;

use App\Model\Service;

class serviceService
{
    public function indexService(){

        $paginator = Service::withTranslation()
            ->with('media')
            ->translated('en')
            ->oldest('sort')
            ->latest('id')
            ->paginate(15);

        return $paginator;
    }

    public function storeService($request){

        $data = $request->all();
        $item = new Service($data);
        $item->save();

        return $item;
    }

    public function editService($id){

        $item = Service::FindorFail($id);
        $item->update();

        return $item;
    }
}
