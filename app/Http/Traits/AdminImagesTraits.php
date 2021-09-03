<?php


namespace App\Http\Traits;


trait AdminImagesTraits
{
    public function AdminImages($item, $modelCollections)
    {
        $imageCount = $item->getMedia($modelCollections)->count();

        $image = '/storage/media/noimages.jpg';

        if ($imageCount != 0) {
            $image = $item->getMedia($modelCollections)->last()->getUrl('thumb-p');
        }
        return $image;
    }

    public function UpdateAdminImages($request, $item, $modelCollections)
    {
        $pathToImage = $request->file('file');

        if ($request->hasFile('file')) {
            $item->addMedia($pathToImage)->toMediaCollection($modelCollections);
        }
    }

    public function MultiUpdateAdminImages($request, $item, $modelCollections)
    {
        $pathToImage = $request->files;
            foreach ($pathToImage as $file) {
                $item->addMedia($file)->toMediaCollection($modelCollections);
            }
    }
}
