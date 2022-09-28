<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProductRequest;
use App\Http\Traits\AdminImagesTraits;
use App\Http\Traits\CreateUpdateTraits;

use App\Model\Product;
use App\Services\Product\productService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AdminProductController extends Controller
{
    public $model;
    public $modelCollections;
    public $product;

    /**
     * @param $model
     */
    public function __construct(Product $model, productService $product)
    {
        $this->model = $model;
        $this->modelCollections = 'product';
        $this->product = $product;
    }

    use AdminImagesTraits, CreateUpdateTraits;

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $paginator = $this->product->indexProduct($request);

        $categories = $this->allCategory();

        return view('admin.product.index', compact('paginator', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Http\Response|View
     */
    public function create()
    {
        $item = new Product();

        $categories = $this->categoryTrait();

        $separator = '-';

        return view('admin.product.edit', compact('item', 'categories', 'separator'));
    }

    /**
     * @param  AdminProductRequest  $request
     * @return RedirectResponse
     */
    public function store(AdminProductRequest $request): RedirectResponse
    {
        $item = $this->model->Create($request->all());

        $this->MultiUpdateAdminImages($request, $item, $this->modelCollections);

        if ($item) {
            return redirect()->route('admin.product.edit', $item->id)->with(['success' => "Новая запись : [{$item['title']}] Успешно создана. Теперь добавьте товару характеристики!."]);
        } else {
            return back()->withErrors(['msg' => 'Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|\Illuminate\Http\Response|View
     */
    public function edit($id, Request $request)
    {
        $item = $this->model->with('media')->withTranslation()->find($id);

        $image = $this->AdminImages($item, $this->modelCollections);

        $categories = $this->categoryTrait();

        $separator = '-';

        $characterShow=$this->product->show_characteristics($id);


        Session::put('paginate_url', \request()->fullUrl().'#specification');

        return view('admin.product.edit', compact('item', 'image', 'categories', 'separator', 'characterShow'));
    }

    /**
     * @param  AdminProductRequest  $request
     * @param  Product  $product
     * @return RedirectResponse
     */
    public function update(AdminProductRequest $request, Product $product): RedirectResponse
    {
        $this->product->deleteImage($request);

        $item = $product->update($request->all());

        $this->MultiUpdateAdminImages($request, $product, $this->modelCollections);

        if ($item) {
            return redirect()
                ->route('admin.product.edit', $product)
                ->with(['success' => ' Ваши данные успешно сохранены. Желаем дальнейшей приятной работы']);
        } else {
            return back()
                ->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->clearMediaCollection($this->modelCollections);

        $result = $product->delete();

        if ($result) {
            return back()->with(['success' => 'УСПЕХ! Ваши данные успешно Удалены. Желаем дальнейшей приятной работы ']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }
}
