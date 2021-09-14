<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProductCharacterRequest;
use App\Model\CharacteristicProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminProductCharacteristic extends Controller
{

    public $model;

    /**
     * @param $model
     */
    public function __construct( CharacteristicProduct $model)
    {
        $this->model = $model;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminProductCharacterRequest $request)
    {
        $this->model->Create($request->all());

        if (session('paginate_url')) {
            return redirect(session('paginate_url'))->with(['success' => 'Ваши данные успешно сохранены. Желаем дальнейшей приятной работы']);
        }
            return back()->withErrors(['msg' => 'Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $item=$this->model->withTranslation()->find($id);

        return view('admin.product.layouts.characteristic.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminProductCharacterRequest $request, $id)
    {
        $item=$this->model->find($id)->update($request->all());

        if (session('paginate_url')) {
            return redirect(session('paginate_url'))->with(['success' => 'Ваши данные успешно сохранены. Желаем дальнейшей приятной работы']);
        }

        if ($item) {
            return back()->with(['success' => '']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }

}
