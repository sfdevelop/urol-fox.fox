<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPostRequest;
use App\Http\Traits\AdminImagesTraits;
use App\Http\Traits\CreateUpdateTraits;
use App\Model\Service;
use App\Services\Service\serviceService;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{

    use AdminImagesTraits , CreateUpdateTraits;

    public $modelCollections;
    public $service;
    protected  $model;

    /**
     * @param $modelCollections
     * @param $service
     */
    public function __construct(Service $model,serviceService $service)
    {
        $this->modelCollections = 'service';
        $this->service = $service;
        $this->model=$model;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $paginator=$this->service->indexService();

        return view('admin.service.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $item = new Service();

        return view('admin.service.edit', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminPostRequest $request)
    {
        $item=$this->createUpdate($request, $id=null);

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
        $item=$this->model->find($id);

        $image = $this->AdminImages($item, $this->modelCollections);

        return view('admin.service.edit', compact('item','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $item=$this->createUpdate($request, $id);

        $this->MultiUpdateAdminImages($request, $this->model->find($id), $this->modelCollections);

        if ($item) {
            return redirect()->route('admin.service.edit', $this->model->find($id))->with(['success' => ' Ваши данные успешно сохранены. Желаем дальнейшей приятной работы']);
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
        $this->model->find($id)->clearMediaCollection($this->modelCollections);

        $result = $this->model->destroy($id);

        if ($result) {
            return back()->with(['success' => 'УСПЕХ! Ваши данные успешно Удалены. Желаем дальнейшей приятной работы ']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }
}
