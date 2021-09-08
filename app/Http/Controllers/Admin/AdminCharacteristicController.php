<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminCharacteristicRequest;
use App\Model\Characteristic;
use App\Services\Characteristics\characteristicsService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminCharacteristicController extends Controller
{

    public $model;
    public $character;

    /**
     * @param $model
     */
    public function __construct(Characteristic $model, characteristicsService $character)
    {
        $this->model = $model;
        $this->character=$character;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $paginator=$this->character->indexCharacteristic();

        return view('admin.characteristic.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $item = new Characteristic();

        return view('admin.characteristic.edit', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminCharacteristicRequest $request)
    {
        $item = $this->model->Create($request->all());

        if ($item) {
            return redirect()->route('admin.character.create')->with(['success' => "Новая запись : [{$item['title']}] Успешно создана. Можете спокойно продолжать работу."]);
        } else {
            return back()->withErrors(['msg' => 'Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Characteristic  $characteristic
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Characteristic $characteristic)
    {
        $item=$characteristic;
        return view('admin.characteristic.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Characteristic  $characteristic
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Characteristic $characteristic)
    {
        $item=$characteristic->update($request->all());

        if ($item) {
            return redirect()->route('admin.character.edit', $characteristic)->with(['success' => ' Ваши данные успешно сохранены. Желаем дальнейшей приятной работы']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Characteristic  $characteristic
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Characteristic $characteristic)
    {
        $result = $characteristic->delete();

        if ($result) {
            return back()->with(['success' => 'УСПЕХ! Ваши данные успешно Удалены. Желаем дальнейшей приятной работы ']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }
}
