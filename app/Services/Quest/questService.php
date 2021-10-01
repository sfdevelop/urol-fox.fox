<?php

namespace App\Services\Quest;

use App\Model\Call;
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

        $this->updateIsSee($contactQuestion);

        return $contactQuestion;
    }

    public function delete_item($id)
    {
        $result=  ContactQuestion::findOrFail($id)->delete();

        return $result;
    }

    public function delete_call($id)
    {
        $result=  Call::findOrFail($id)->delete();

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

    public function addCall($request)
    {
        Call::create($request->all());
    }

    public function showCall()
    {
        $items=Call::latest('id')
            ->paginate(15);

        return $items;
    }

    public function idCallback($id)
    {
        $call=Call::findOrFail($id);

        $this->updateIsSee($call);

        return $call;
    }
}
