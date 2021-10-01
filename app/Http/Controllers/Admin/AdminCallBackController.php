<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Call;
use Illuminate\Http\Request;

class AdminCallBackController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $items=$this->questions->showCall();

        return view('admin.callback.index', compact('items'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $call=$this->questions->idCallback($id);

        return view('admin.callback.edit', compact('call'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $result = $this->questions->delete_call($id);

        if ($result) {
            return back()->with(['success' => 'УСПЕХ! Ваши данные успешно Удалены. Желаем дальнейшей приятной работы ']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }
}
