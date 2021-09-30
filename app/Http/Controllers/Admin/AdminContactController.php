<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminContactsRequest;
use App\Model\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Contact $contact)
    {
        $item=$contact;

        return view('admin.contacts.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminContactsRequest $request, Contact $contact)
    {
//        dd($contact);
        $item=$contact->update($request->all());

        if ($item) {
            return redirect()
                ->route('admin.contacts.edit', $contact)
                ->with(['success' => ' Ваши данные успешно сохранены. Желаем дальнейшей приятной работы']);
        } else {
            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }

}
