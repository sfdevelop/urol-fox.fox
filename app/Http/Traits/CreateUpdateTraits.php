<?php

namespace App\Http\Traits;

trait CreateUpdateTraits
{
    public function createUpdate($request, $id)
    {
        ($id == null)
            ?
            $item = $this->model->Create($request->all())
            :
            $item = $this->model->find($id)->update($request->all());

        return $item;
    }
}
