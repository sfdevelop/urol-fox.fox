<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminOptionRequest;
use App\User;
use Illuminate\Http\Request;

class AdminOptionController extends BaseController
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $item = User::findorfail($id);

        return view('admin.option.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminOptionRequest $request, $id)
    {
        $user = User::findorfail($id);

        $result=$this->options->optionUpdate($request, $user);

        if ($result) {
            return redirect()->route('admin.option.edit', $user->id)->with(['success' => 'Ваши данные успешно сохранены. Теперь вы можете производить авторизацию в административную панель по новым данным.']);
        } else {
            return back()->withErrors(['msg' => "Ошибка сохранения. Проверьте правильность введенных вами данных и попытайтесь снова"])->withInput();
        }
    }
}
