<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPagesRequest;
use App\Http\Traits\AdminImagesTraits;
use App\Http\Traits\CreateUpdateTraits;
use App\Model\Pages;
use App\Services\Pages\pagesService;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    use AdminImagesTraits, CreateUpdateTraits;

    public $pages;
    public $modelCollections;
    protected  $model;

    /**
     * @param $pages
     */
    public function __construct(Pages $model,pagesService $pages)
    {
        $this->pages = $pages;
        $this->modelCollections = 'pages';
        $this->model=$model;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $paginator=$this->pages->adminIndex();

        return view('admin.pages.index', compact('paginator'));
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

        return view('admin.pages.edit', compact('item','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminPagesRequest $request, $id)
    {

        $item=$this->model->find($id)->update($request->all());

        $this->MultiUpdateAdminImages($request, $this->model->find($id), $this->modelCollections);

        if ($item) {
            return redirect()->route('admin.pages.edit', $item)->with(['success' => ' Ваши данные успешно сохранены. Желаем дальнейшей приятной работы']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }
}
