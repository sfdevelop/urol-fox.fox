<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSliderRequest;
use App\Http\Traits\AdminImagesTraits;
use App\Model\Slider;
use App\Services\slider\sliderService;
use Illuminate\Http\Request;

class AdminSliderController extends Controller
{
    use AdminImagesTraits;

    public $modelCollections;
    public $sliderService;

    /**
     * @param $modelCollections
     */
    public function __construct( sliderService $sliderService)
    {
        $this->modelCollections = 'slider';
        $this->sliderService=$sliderService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $paginator = $this->sliderService->indexSlider();

        return view('admin.slider.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $item = new Slider();

        return view('admin.slider.edit', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminSliderRequest $request)
    {
        $item=$this->sliderService->storeSlider($request);

        $this->MultiUpdateAdminImages($request, $item, $this->modelCollections);

        if ($item) {
            return redirect()->route('admin.news.create')->with(['success' => "Новая запись : [{$item['title']}] Успешно создана. Можете спокойно продолжать работу."]);
        } else {
            return back()->withErrors(['msg' => 'Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $item=$this->sliderService->editPost($id);

        $image = $this->AdminImages($item, $this->modelCollections);

        return view('admin.slider.edit', compact('item','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminSliderRequest $request, $id)
    {
        $item = Slider::find($id);

        $result = $item->update($request->all());

        $this->MultiUpdateAdminImages($request, $item, $this->modelCollections);

        if ($result) {
            return redirect()->route('admin.slider.edit', $item->id)->with(['success' => ' Ваши данные успешно сохранены. Желаем дальнейшей приятной работы']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Slider::find($id)->clearMediaCollection($this->modelCollections);

        $result = Slider::destroy($id);

        if ($result) {
            return back()->with(['success' => 'УСПЕХ! Ваши данные успешно Удалены. Желаем дальнейшей приятной работы ']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }
}
