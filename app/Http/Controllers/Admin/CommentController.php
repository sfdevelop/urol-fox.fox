<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCommentsRequest;
use App\Model\Comment;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommentController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $items = Comment::latest('id')->paginate();

        return view('admin.comments.index', compact('items'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $item = new Comment();

        return view('admin.comments.edit', compact('item'));
    }

    /**
     * @param  AdminCommentsRequest  $request
     * @param  Comment  $comment
     * @return RedirectResponse
     */
    public function store(AdminCommentsRequest $request, Comment $comment): RedirectResponse
    {
        try {
            $item = $comment->Create($request->validated());

            return redirect()->route('admin.comments.index')->with(['success' => "Новая запись : [{$item['title']}] Успешно создана. Можете спокойно продолжать работу."]);
        } catch (Exception $e) {
            info($e);

            return back()->withErrors(['msg' => 'Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * @param  Comment  $comment
     * @return View
     */
    public function edit(Comment $comment): View
    {
        return view('admin.comments.edit', ['item' => $comment]);
    }

    /**
     * @param  AdminCommentsRequest  $request
     * @param  Comment  $comment
     * @return RedirectResponse
     */
    public function update(AdminCommentsRequest $request, Comment $comment): RedirectResponse
    {
        try {
            $comment->update($request->validated());

            return redirect()->route('admin.comments.edit', $comment)->with(['success' => 'Ваши данные успешно сохранены. Желаем дальнейшей приятной работы']);
        } catch (Exception $e) {
            info($e);

            return back()->withErrors(['msg' => 'Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору.'])->withInput();
        }
    }

    /**
     * @param  Comment  $comment
     * @return RedirectResponse
     */
    public function destroy(Comment $comment): RedirectResponse
    {
        try {
            $comment->delete();

            return back()->with(['success' => ' Ваши данные успешно удалены. Желаем дальнейшей приятной работы']);
        } catch (\Throwable $e) {
            info($e);

            return back()->withErrors(['msg' => "Что то пошло не так, Ваши данные не сохранились. Обратитесь в администратору."])->withInput();
        }
    }
}
