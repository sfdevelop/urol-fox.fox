<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProductRequest;
use App\Http\Traits\AdminImagesTraits;
use App\Http\Traits\CreateUpdateTraits;

use App\Model\Product;
use App\Services\Product\productService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $paginator = $this->product->indexProduct();

        return view('admin.product.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $item = new Product();

        $categories = $this->categoryTrait();

        $separator = '-';

        return view('admin.product.edit', compact('item', 'categories', 'separator'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminProductRequest $request)
    {
        $item = $this->model->Create($request->all());

        $this->MultiUpdateAdminImages($request, $item, $this->modelCollections);

        if ($item) {
            return redirect()->route('admin.product.create')->with(['success' => "Новая запись : [{$item['title']}] Успешно создана. Можете спокойно продолжать работу."]);
        } else {
            return back()->withErrors(['msg' => 'Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
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
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminProductRequest $request, Product $product)
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
     * @return \Illuminate\Http\RedirectResponse
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
