<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCategoryRequest;
use App\Http\Traits\AdminImagesTraits;
use App\Http\Traits\CreateUpdateTraits;
use App\Model\Category;
use App\Services\Category\categoryService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminCategoryController extends Controller
{
    use AdminImagesTraits, CreateUpdateTraits;

    public $modelCollections;
    protected $model;
    public $category;

    /**
     * @param $modelCollections
     */
    public function __construct(Category $model, categoryService $category)
    {
        $this->modelCollections = 'category';
        $this->model = $model;
        $this->category = $category;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Http\Response|View
     */
    public function index()
    {
        $categories = $this->category->categoryIndex();

        $separator = '-';

        return view('admin.category.index', compact('categories', 'separator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Http\Response|View
     */
    public function create()
    {
        $item = new Category();

        $categories = $this->categoryTrait();

        $separator = '-';

        return view('admin.category.edit', compact('item', 'categories', 'separator'));
    }

    /**
     * @param  AdminCategoryRequest  $request
     * @return RedirectResponse
     */
    public function store(AdminCategoryRequest $request): RedirectResponse
    {

        $item = $this->model->Create($request->all());

        $this->MultiUpdateAdminImages($request, $item, $this->modelCollections);

        if ($item) {
            return redirect()->route('admin.category.create')->with(['success' => "Новая запись : [{$item['title']}] Успешно создана. Можете спокойно продолжать работу."]);
        } else {
            return back()->withErrors(['msg' => 'Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Factory|Application|View
     */
    public function edit($id)
    {
        $item = $this->model->find($id);

        $image = $this->AdminImages($item, $this->modelCollections);

        $categories = $this->categoryTrait();

        $separator = '-';

        return view('admin.category.edit', compact('item', 'image', 'categories', 'separator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(AdminCategoryRequest $request, Category $category)
    {

        $item = $category->update($request->all());

        $this->MultiUpdateAdminImages($request, $category, $this->modelCollections);

        if ($item) {
            return redirect()->route('admin.category.edit', $category)->with(['success' => ' Ваши данные успешно сохранены. Желаем дальнейшей приятной работы']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(Category $category)
    {
        $category->clearMediaCollection($this->modelCollections);

        if ($category->childrenCategories()->count()>0) {
            $category->childrenCategories()->delete();
        }

        $result = $category->delete();

        if ($result) {
            return back()->with(['success' => 'УСПЕХ! Ваши данные успешно Удалены. Желаем дальнейшей приятной работы ']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }
}
