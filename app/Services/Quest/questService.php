<?php

namespace App\Services\Quest;

use App\Model\ContactQuestion;
use App\Model\Question;

class questService
{
    public function showQuestions()
    {
        $items = Question::latest('id')
            ->paginate(15);

        return $items;
    }

    public function showFeedBack()
    {
        $items = ContactQuestion::latest('id')
            ->paginate(15);

        return $items;
    }

    public function updateIsSee($question)
    {
        $data = [
            'is_see' => true
        ];

        $question->update($data);
    }

    public function idFeedback($id)
    {
        $contactQuestion=ContactQuestion::findOrFail($id);

        return $contactQuestion;
    }

    public function delete_item($id)
    {
        $result=  ContactQuestion::findOrFail($id)->delete();

        return $result;
    }

    public function addQuestion($request)
    {
        $message= Question::create([
            'title' => $request->name,
            'mail' => $request->mail,
            'question' => $request->question,
        ]);

        return $message;
    }

    public function addQuestionContact($request)
    {
        $message= ContactQuestion::create([
            'title' => $request->name,
            'mail' => $request->mail,
            'question' => $request->question,
        ]);

        return $message;
    }
}
